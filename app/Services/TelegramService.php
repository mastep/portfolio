<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    private Client $client;
    private string $botToken;
    private string $apiUrl;

    public function __construct()
    {
        $this->botToken = config('telegram.bot_token');
        $this->apiUrl = config('telegram.api_url') . $this->botToken;
        $this->client = new Client([
            'timeout' => 10,
        ]);
    }

    /**
     * Отправка сообщения в Telegram
     */
    public function sendMessage(int $chatId, string $text, array $options = []): bool
    {
        try {
            $data = array_merge([
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
            ], $options);

            $response = $this->client->post($this->apiUrl . '/sendMessage', [
                'json' => $data,
            ]);

            return $response->getStatusCode() === 200;
        } catch (\Exception $e) {
            Log::error('Telegram send message error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Отправка сообщения с кнопкой для открытия Web App
     */
    public function sendWebAppButton(int $chatId, string $text, string $webAppUrl): bool
    {
        return $this->sendMessage($chatId, $text, [
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        [
                            'text' => 'Открыть магазин',
                            'web_app' => ['url' => $webAppUrl],
                        ],
                    ],
                ],
            ],
        ]);
    }

    /**
     * Установка webhook
     */
    public function setWebhook(string $url): bool
    {
        try {
            $response = $this->client->post($this->apiUrl . '/setWebhook', [
                'json' => ['url' => $url],
            ]);

            return $response->getStatusCode() === 200;
        } catch (\Exception $e) {
            Log::error('Telegram set webhook error: ' . $e->getMessage());
            return false;
        }
    }
}

