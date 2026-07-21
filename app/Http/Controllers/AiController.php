<?php

namespace App\Http\Controllers;

use Database\Seeders\QASeeder;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AiController extends Controller
{
    /**
     * Базовый URL для API Ollama
     */
    private string $baseUrl;

    /**
     * Настройки подключаемой модели Ollama
     */
    private array $ollamaConfig;
    private string $systemInstruction;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('app.AI_DOCKER_BASE_URL'), '/');

        $this->ollamaConfig = [
            'model' => 'R4C3R/qwen2.5-1.5b-heretic:latest',
            'keep_alive' => '3m',
            'options' => [
                'num_predict' => 300,      // Ограничивает длину ответа (меньше токенов = быстрее ответ)
                'temperature' => 0.4,      // Минимизирует случайность, ускоряет выбор токенов
            ]
        ];

        $this->systemInstruction = "Ты чат-бот по имени Сэвэн, специалист техподдержки веб-студии www.7lab.pro. Твоя задача — отвечать на вопросы пользователей строго на основе предоставленного ниже FAQ. Если ответа на вопрос нет в списке, вежливо отправь пользователя на сайт сэвэнлабпро.
ПРАВИЛА ОТВЕТА:
1. Пиши дружелюбно и просто.
2. Длина ответа должна быть строго от 2 до 5 предложений.
3. Категорически запрещено использовать Markdown разметку (никаких звездочек *, решеток #, жирного шрифта или курсива).
4. Категорически запрещено использовать списки (маркированные или нумерованные) и блоки кода. Все перечисления пиши в строку через запятую.
FAQ:".print_r(QASeeder::getData(), true);
    }

    /**
     * Метод пробуждения модели при заходе на сайт.
     * Записывает стартовую историю с системным промптом в сессию.
     */
    public function wakeupModel(Request $request)
    {
        $url = $this->baseUrl . '/api/chat';

        $chatHistory = $request->session()->get('chat_history', []);

        $isNewSession=empty($chatHistory);

        if ($isNewSession) {
            $chatHistory[] = [
                'role'    => 'system',
                'content' => $this->systemInstruction
            ];
            session()->put('chat_history', $chatHistory);
            session()->save();
            // Отправляем пустой запрос на прогрев контекста в Ollama
            $ollamaData = json_encode([
                'model'      => $this->ollamaConfig['model'],
                'keep_alive' => $this->ollamaConfig['keep_alive'],
                'messages'   => $chatHistory,
                'stream'     => true,
                'options'    => $this->ollamaConfig['options']
            ]);

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $ollamaData,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_TIMEOUT        => 60
            ]);
            curl_exec($ch);
            curl_close($ch);
        }


        // Возвращаем фронтенду флаг, нужно ли будет здороваться
        return response()->json([
            'status' => 'success',
            'is_new_session' => $isNewSession
        ]);
    }

    public function handleChat(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string|max:255',
        ]);


        $promptText = trim($request->input('prompt'));
        $url = $this->baseUrl . '/api/chat';

        // Получаем текущую историю из сессии
        $chatHistory = $request->session()->get('chat_history', []);

        // Если история пуста, значит wakeupModel не вызывался или сессия сбросилась
        $isFirstGreeting = empty($chatHistory);

        if ($isFirstGreeting) {
            $chatHistory[] = [
                'role'    => 'system',
                'content' => $this->systemInstruction
            ];
        }

        // Добавляем реплику пользователя
        $chatHistory[] = [
            'role'    => 'user',
            'content' => $promptText
        ];

        // Важно: передаем $chatHistory по значению, чтобы использовать внутри замыкания
        return new StreamedResponse(function () use ($url, $chatHistory, $isFirstGreeting) {
            $ollamaData = json_encode([
                'model'      => $this->ollamaConfig['model'],
                'keep_alive' => $this->ollamaConfig['keep_alive'],
                'messages'   => $chatHistory,
                'stream'     => true,
                'options'    => $this->ollamaConfig['options'],
            ]);

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $ollamaData,
                CURLOPT_RETURNTRANSFER => false, // Результат идет напрямую в WRITEFUNCTION
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_TIMEOUT        => 60
            ]);

            $textBuffer = "";
            $fullAiResponse = "";
            $lineBuffer = ""; // Буфер для склеивания разорванных сетевых пакетов

// Передаем буферы по ссылке, чтобы наполнять их в процессе стриминга
            curl_setopt($ch, CURLOPT_WRITEFUNCTION, function ($curl, $data) use (&$textBuffer, &$fullAiResponse, &$lineBuffer) {
                // Приклеиваем новые данные к остатку с предыдущего вызова cURL
                $lineBuffer .= $data;

                // Разбиваем строго по переносу строки
                $lines = explode("\n", $lineBuffer);

                // Забираем последний элемент. Если пакет оборвался посреди строки,
                // этот кусок сохранится в буфер до следующего вызова.
                $lineBuffer = array_pop($lines);

                foreach ($lines as $line) {
                    $line = trim($line);
                    if (empty($line)) continue;

                    // Отсекаем SSE-префикс "data: ", если он есть
                    if (strpos($line, 'data: ') === 0) {
                        $line = substr($line, 6);
                    }
                    if ($line === '[DONE]') continue;

                    $json = json_decode($line, true);
                    if (!$json || !isset($json['message']['content'])) continue;

                    $token = $json['message']['content'];

                    // Очищаем токен, сохраняя буквы, цифры и базовую пунктуацию
                    $cleanToken = preg_replace('/[^\p{L}\s\d.,!?@\-]/u', '', $token);

                    $textBuffer .= $cleanToken;
                    $fullAiResponse .= $cleanToken;

                    // Проверяем строго знаки препинания (. ! ?). Никаких пробелов \s!
                    if (preg_match('/[.!?]/', $textBuffer) && mb_strlen($textBuffer) > 90) {
                        $audioChunk = $this->synthesizeSpeech(trim($textBuffer));
                        if (!empty($audioChunk)) {
                            echo $audioChunk;
                            if (ob_get_level() > 0) ob_flush();
                            flush();
                        }
                        $textBuffer = ""; // Очищаем буфер для следующего предложения
                    }
                }
                return strlen($data);
            });

            curl_exec($ch);
            curl_close($ch);

// Озвучиваем финальный остаток текста, если он остался в буфере
            if (!empty(trim($textBuffer))) {
                $audioChunk = $this->synthesizeSpeech(trim($textBuffer));
                if (!empty($audioChunk)) {
                    echo $audioChunk;
                    if (ob_get_level() > 0) ob_flush();
                    flush();
                }
            }

            // ИСПРАВЛЕНО: Сохранение сессии в самом конце работы стрима
            if (!empty(trim($fullAiResponse))) {
                $finalHistory = $chatHistory;
                $finalHistory[] = [
                    'role'    => 'assistant',
                    'content' => trim($fullAiResponse)
                ];

                // Используем глобальный хелпер session(), так как $request внутри замыкания стрима может быть изолирован
                session()->put('chat_history', $finalHistory);
                session()->save(); // Принудительно пушим в хранилище сессий (файлы/redis/db)
            }

        }, 200, [
            'Content-Type'      => 'audio/mpeg',
            'Cache-Control'     => 'no-cache, must-revalidate',
            'Connection'        => 'keep-alive',
            'X-Accel-Buffering' => 'no',
            'X-First-Greeting'  => $isFirstGreeting ? 'true' : 'false',
        ]);
    }




    function getFaqStr(): string
    {
        return print_r(QASeeder::getData(), true);
    }

    public function synthesizeSpeech(string $text)
    {
        $apiKey = config('app.API_KEY_YANDEX_SPEECH');

        $ch = curl_init('https://tts.api.cloud.yandex.net/speech/v1/tts:synthesize');

        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Api-Key ' . $apiKey,
            ],
            CURLOPT_POSTFIELDS => http_build_query([
                'text' => $text,
                'lang' => 'ru-RU',
                'voice' => 'filipp',
                'emotion' => 'neutral',
                'speed' => 1.16,
                'format' => 'mp3',
            ]),
        ]);

        $audio = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            return $audio;
        } else {
            logger()->error("Yandex SpeechKit Error $httpCode: " . $audio);
            return '';
        }
    }

}
