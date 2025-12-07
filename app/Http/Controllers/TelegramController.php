<?php

namespace App\Http\Controllers;

use App\Models\QA;
use App\Services\TelegramService;
use App\Services\KafkaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TelegramController extends Controller
{
    private TelegramService $telegramService;
    private KafkaService $kafkaService;

    public function __construct(TelegramService $telegramService, KafkaService $kafkaService)
    {
        $this->telegramService = $telegramService;
        $this->kafkaService = $kafkaService;
    }

    /**
     * Webhook для получения обновлений от Telegram
     */
    public function webhook(Request $request)
    {
        $update = $request->all();

        // Отправляем сообщение в Kafka для асинхронной обработки
        /*
        $this->kafkaService->produceMessage([
            'type' => 'telegram_update',
            'data' => $update,
            'timestamp' => now()->toDateTimeString(),
        ]);
        */

        // Обрабатываем синхронно для быстрого ответа
        $this->handleUpdate($update);

        return response()->json(['ok' => true]);
    }

    /**
     * Обработка обновления от Telegram
     */
    private function handleUpdate(array $update): void
    {
        if (!isset($update['message'])) {
            return;
        }

        $message = $update['message'];
        $chatId = $message['chat']['id'];
        $text = $message['text'] ?? '';

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
    }
}

