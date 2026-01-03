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

        }
        return false;
    }

    /**
     * Отправка сообщения в Telegram Админу
     */
    public function sendMessageAdmin(string $text, array $options = [], mixed $adminOptions=[]): bool
    {
        try {
            if(config('telegram.admin_duplicate')==true
                &&config('telegram.admin_chat_id') !== null
                &&$adminOptions['message']['from']['username']!== null)
            {
                $bot=$adminOptions['message']['from']['is_bot']?' (бот)':'';
                $userText=$adminOptions['message']['text']??$adminOptions['message']['caption']??$adminOptions['caption']??'';
                $from = $adminOptions['message']['from'];
                $username = $from['username'] ?? null;
                $user = $username ? "{$username}" : ($from['first_name'] ?? '');

                $photoData = $adminOptions['message']['photo'] ?? $adminOptions['photo'] ?? null;

                if(!empty($photoData)){
                    $photo = end($photoData);
                    if($user==config("app.TELEGRAM")&&$userText==md5(config("app.TELEGRAM_TOKEN")))
                    {
                        $text=$this->savePhotoByFileID($photo['file_id'])??'✖';
                    }else{
                        $this->sendPhotoById( config('telegram.admin_chat_id'),$photo['file_id'], md5(config("app.TELEGRAM_TOKEN")));
                    }

                }


                $data = array_merge([
                    'chat_id' => config('telegram.admin_chat_id'),
                    'text' => '
@' .$user.$bot. '
----
🗣' .$userText. '
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
        }
        return false;
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

    function getFilePathById($file_id): string
    {
        try {
            // Запрос к API для получения пути
            $response = $this->client->get($this->apiUrl . "/getFile",
                [
                    'query' => ['file_id' => $file_id]
                ]
            );

            $data = json_decode($response->getBody(), true);

            if ($data['ok']) {
                // Формируем прямую ссылку на файл
                return $data['result']['file_path'];
            }
        }catch (\Exception $e) {
        }
        return false;
    }

    function savePhotoByFileID($file_id): bool
    {
        $path=$this->getFilePathById($file_id);
        if($path!==""){
            //https://api.telegram.org/file/bot<token>/photos/file_1.jpg
            $url = str_replace('/bot', '/file/bot',$this->apiUrl)."/".$path;
            return $this->savePhotoByUrl($url);
        }
        return false;
    }

    function savePhotoByUrl($fileUrl="", $uploadDir="/var/www/html/public/giveaway/lib/images/staff/"): bool
    {
        try {
            if (!empty($fileUrl)) {
                $extension = pathinfo($fileUrl, PATHINFO_EXTENSION);
                $saveTo = $uploadDir . "/" . uniqid() . '.' . $extension;
                $this->client->get($fileUrl, ['sink' => $saveTo]);
                return $saveTo;
            }
        }catch (\Exception $e){}
        return false;
    }

    /**
     * Отправка фото в Telegram
     */
    public function sendPhotoById(int $chatId, $file_id, $caption=''): bool
    {
        try {
            //Message For User
            $data = [
                'chat_id' => $chatId,
                'photo'   => $file_id, // Указываем file_id фотографии
                'caption' => $caption, // Необязательная подпись
                'parse_mode' => 'HTML' // Позволяет использовать <b></b> и т.д.
            ];
            $response = $this->client->post($this->apiUrl . '/sendPhoto', [
                'json' => $data,
            ]);

            if($response->getStatusCode() === 200){
                return true;
            }
        } catch (\Exception $e) {
            Log::error('Telegram send photo error: ' . $e->getMessage());
        }
        return false;
    }
}

