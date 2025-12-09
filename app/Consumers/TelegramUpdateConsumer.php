<?php

namespace App\Consumers;

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

            $msg = $update['message'];
            $chatId = $msg['chat']['id'];
            $text = $msg['text'] ?? '';

            // Обработка команды /shop
            if ($text === '/shop' || str_starts_with($text, '/shop')) {
                $webAppUrl = config('telegram.web_app_url');
                $this->telegramService->sendWebAppButton(
                    $chatId,
                    '🍵 Добро пожаловать в наш магазин чая! Нажмите на кнопку ниже, чтобы открыть каталог.',
                    $webAppUrl
                );
                return;
            }

            // Обработка обычных вопросов
            if (!empty($text)) {
                // QA::findAnswer($text) - предполагается, что это статический метод
                $answer = QA::findAnswer($text);

                if ($answer) {
                    $this->telegramService->sendMessage($chatId, $answer);
                } else {
                    $this->telegramService->sendMessage(
                        $chatId,
                        'Извините, я не нашел ответ на ваш вопрос. Попробуйте переформулировать вопрос или обратитесь к администратору.'
                    );
                }
            }

            // --- Конец скопированной логики ---

        } catch (Exception $e) {
            $errorMessage = "Ошибка обработки сообщения Kafka: " . $e->getMessage();
            Log::error($errorMessage);
        }
    }
}
