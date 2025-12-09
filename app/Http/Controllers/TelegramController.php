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

        $this->kafkaService->produceMessage([
            'type' => 'telegram_update',
            'data' => $update,
            'timestamp' => now()->toDateTimeString(),
        ], $update['message']['message_id']);


        return response()->json(['ok' => true]);
    }
}

