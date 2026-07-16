<?php

namespace App\Http\Controllers;

use Database\Seeders\QASeeder;
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

    /**
     * Инициализация конфигурации ИИ через конструктор
     */
    public function __construct()
    {
        $this->baseUrl = rtrim(config('app.AI_DOCKER_BASE_URL'), '/');

        // Все настройки подключения теперь хранятся в одном месте
        $this->ollamaConfig = [
            'model' => 'R4C3R/qwen2.5-1.5b-heretic:latest',
            'keep_alive' => '5m', // Время удержания модели в памяти
            'options' => [
                'num_predict' => 200,
                'temperature' => 0.7
            ]
        ];
    }

    /**
     * Метод пробуждения (прогрева) модели из сна.
     */
    public function wakeupModel()
    {
        $url = $this->baseUrl . '/api/generate';

        // Для прогрева берем только имя модели и параметр keep_alive из конструктора
        $ollamaData = json_encode([
            'model'      => $this->ollamaConfig['model'],
            'keep_alive' => $this->ollamaConfig['keep_alive'],
        ]);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $ollamaData,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_TIMEOUT        => 30
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            return response()->json(['status' => 'success', 'message' => 'Model warming up...']);
        }

        return response()->json(['status' => 'error', 'message' => 'Failed to wake up model'], 500);
    }

    /**
     * Основной метод отправки запросов в LLM (генерация аудио-стрима)
     */
    public function handleChat(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string|max:255',
        ]);

        $promptText = $request->input('prompt');
        $url = $this->baseUrl . '/api/chat';

        $chatHistory = $request->session()->get('chat_history', []);

        if (empty($chatHistory)) {
            $systemInstruction = "Отвечай как специалист технической поддержки веб-студии www.7lab.pro. Прикрепил текстовую базу знаний ниже. Проанализируй базу знаний. Отвечай своими словами по ней, но только если информация есть в базе знаний. Отвечай дружелюбно не более 2-5 предложений. Без использования Markdown разметки, списков и блоков кода. Если информацию не нашел в базе знаний, отправляй в раздел контакты на сайте..\nБАЗА ЗНАНИЙ:" . print_r(QASeeder::getData(), true);

            $chatHistory[] = [
                'role'    => 'system',
                'content' => $systemInstruction
            ];
        }

        $chatHistory[] = [
            'role'    => 'user',
            'content' => $promptText
        ];

        logger()->error('AI CHAT BEFORE STREAM: ' . print_r($chatHistory, true));

        return new StreamedResponse(function () use ($url, $chatHistory, $request) {
            // Формируем тело запроса для чата на основе массива из конструктора
            $ollamaData = json_encode([
                'model'      => $this->ollamaConfig['model'],
                'keep_alive' => $this->ollamaConfig['keep_alive'],
                'messages'   => $chatHistory,
                'stream'     => true,
                'options'    => $this->ollamaConfig['options'],
            ]);

            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $ollamaData,
                CURLOPT_RETURNTRANSFER => false,
                CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                CURLOPT_TIMEOUT => 60
            ]);

            $textBuffer = "";
            $fullAiResponse = "";

            curl_setopt($ch, CURLOPT_WRITEFUNCTION, function ($curl, $data) use (&$textBuffer, &$fullAiResponse) {
                $lines = explode("\n", $data);
                foreach ($lines as $line) {
                    if (empty(trim($line))) continue;
                    $json = json_decode($line, true);

                    if (isset($json['message']['content'])) {
                        $token = preg_replace('/[^\p{L}\s@0-9]/u', '', $json['message']['content']);
                        $textBuffer .= $token;
                        $fullAiResponse .= $token;

                        if (preg_match('/[.!?]/', $textBuffer) && mb_strlen($textBuffer) > 40) {
                            $audioChunk = $this->synthesizeSpeech(trim($textBuffer));
                            if (!empty($audioChunk)) {
                                echo $audioChunk;
                                if (ob_get_level() > 0) ob_flush();
                                flush();
                            }
                            $textBuffer = "";
                        }
                    }
                }
                return strlen($data);
            });

            curl_exec($ch);
            curl_close($ch);

            if (!empty(trim($textBuffer))) {
                $audioChunk = $this->synthesizeSpeech(trim($textBuffer));
                if (!empty($audioChunk)) {
                    echo $audioChunk;
                    if (ob_get_level() > 0) ob_flush();
                    flush();
                }
            }

            if (!empty($fullAiResponse)) {
                $finalHistory = $chatHistory;
                $finalHistory[] = [
                    'role'    => 'assistant',
                    'content' => $fullAiResponse
                ];

                $request->session()->put('chat_history', $finalHistory);
                $request->session()->save();
            }

        }, 200, [
            'Content-Type' => 'audio/ogg',
            'Cache-Control' => 'no-cache, must-revalidate',
            'Connection' => 'keep-alive',
            'X-Accel-Buffering' => 'no',
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
                'speed' => 1.12,
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
