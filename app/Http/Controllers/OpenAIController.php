<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OpenAIController extends Controller
{
    public function generateText($prompt="")
    {
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
