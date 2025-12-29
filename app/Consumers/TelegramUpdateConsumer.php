<?php

namespace App\Consumers;

use App\Http\Controllers\OpenAIController;
use Database\Seeders\QASeeder;
use Illuminate\Support\Facades\Log;
use Junges\Kafka\Contracts\ConsumerMessage;
use Exception;
// Импортируем сервисы и модели, которые использовались в контроллере
use App\Services\TelegramService;
use App\Models\QA;

class TelegramUpdateConsumer
{
    private TelegramService $telegramService;

    // Используем внедрение зависимостей (Dependency Injection) через конструктор
    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function __invoke(ConsumerMessage $message): void
    {
        try {
            // Десериализуем payload, который мы отправили из контроллера
            $payload = json_decode($message->getBody(), true);

            // Получаем оригинальный Telegram Update из ключа 'data'
            $update = $payload['data'] ?? null;

            if (!$update || !isset($update['message'])) {
                return; // Пропускаем, если данных нет
            }

            // --- Скопированная логика из handleUpdate контроллера ---

            $photoData = $update['message']['photo'] ?? $update['photo'] ?? null;

            $msg = $update['message'];
            $chatId = $msg['chat']['id'];
            $text = (!empty($photoData))?'/youarein':($msg['text']??'');


            // Обработка обычных вопросов
            if (!empty($text)) {
                $answer = QA::findAnswer($text);

                if (!$answer) {
                    $response = "";

                    $openAI = new OpenAIController();
                    $data = QASeeder::getData();
                    $response = $openAI->generateText($text, $data);

                    $answer = $response['message'] ?? '😢 Извини, не нашел ответ на вопрос. Попробуй задать вопрос более кратко или обратитесь к администратору @pro_7lab.';

                }
                $this->telegramService->sendMessage($chatId, $answer, adminOptions:$update);
            }

        } catch (Exception $e) {
            $errorMessage = "Ошибка обработки сообщения Kafka: " . $e->getMessage();
            Log::error($errorMessage);
        }
    }
}
