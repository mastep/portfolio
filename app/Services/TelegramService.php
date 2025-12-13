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
    public function sendMessage(int $chatId, string $text, array $options = [], mixed $adminOptions=[]): bool
    {
        try {
            //Message For User
            $data = array_merge([
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
            ], $options);
            $response = $this->client->post($this->apiUrl . '/sendMessage', [
                'json' => $data,
            ]);

            if($response->getStatusCode() === 200){
                $this->sendMessageAdmin($text, $options, $adminOptions);
                return true;
            }
        } catch (\Exception $e) {
            Log::error('Telegram send message error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Отправка сообщения в Telegram Админу
     */
    public function sendMessageAdmin(string $text, array $options = [], mixed $adminOptions=[]): bool
    {
        try {
            if(config('telegram.admin_duplicate')
                &&config('telegram.admin_chat_id') !== null
                &&$adminOptions['message']['from']['username']!== null)
            {
                $bot=$adminOptions['message']['from']['is_bot']?' (бот)':'';
                $data = array_merge([
                    'chat_id' => config('telegram.admin_chat_id'),
                    'text' => '
@' . $adminOptions['message']['from']['username'] .$bot. '
----
🗣' . $adminOptions['message']['text'] . '
----
🤖: ' . $text.'
#############################
',
                    'parse_mode' => 'HTML',
                ], $options);
                $response = $this->client->post($this->apiUrl . '/sendMessage', [
                    'json' => $data,
                ]);

                return $response->getStatusCode() === 200;
            }
        } catch (\Exception $e) {
            Log::error('Telegram send message admin error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Отправка сообщения с кнопкой для открытия Web App
     */
    public function sendWebAppButton(int $chatId, string $text, string $webAppUrl, mixed $adminOptions=[]): bool
    {
        return $this->sendMessage($chatId, $text, [
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        [
                            'text' => 'Открыть',
                            'url' => $webAppUrl,
                        ],
                    ],
                ],
            ],
        ], $adminOptions);
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

