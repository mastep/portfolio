<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OpenAIController extends Controller
{
    public function generateText($prompt="", $data=false)
    {
        try {
            if(is_array($data)&&!empty($data)){
                $prompt='Вопрос:'.$prompt.'. Представь, что ты сотрудник технической поддержки. Обращайся через местоимение ты. Не приветствуй!  Отвечай очень вежливо. Помоги ответить на вопрос пользователя исходя из текстовой базы знаний. Не сообщай что ты ищешь ответ в нашей базе знаний. Не используй символы **. База знаний:'.print_r($data, true);
            }
            $client = new Client();
            $response = $client->post(config('open_ai.url'), [
                'headers' => [
                    'Authorization' => 'Bearer ' . config('open_ai.token'),
                    'x-proxy-source' => '',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'message' => $prompt,
                    'parent_message_id' => '',
                    'file_ids' => ['']
                ],
            ]);

            $body = json_decode($response->getBody(), true);
        } catch (Exception $e) {
            $errorMessage = "Ошибка запроса к AI: " . $e->getMessage();
            $body['message']=$errorMessage; //todo убрать после отладки
            Log::error($errorMessage);
        }


        return $body;
    }
}
