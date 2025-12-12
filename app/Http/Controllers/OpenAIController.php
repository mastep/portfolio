<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OpenAIController extends Controller
{
    public function generateText($prompt="", $data=false)
    {
        if(is_array($data)&&!empty($data)){
            $prompt='Представь, что ты чат бот. Ответь на вопрос пользователя исходя из текстовой базы знаний. Если не удается найти ответ в базе знаний ничего не отвечай.
Вопрос:'.$prompt.'
База знаний:'.print_r($data,true);
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

        return $body;
    }
}
