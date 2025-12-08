<?php

return [
    'bot_token' => env('TELEGRAM_TOKEN'),
    'web_app_url' => env('TELEGRAM_WEB_APP_URL', 'http://localhost/api/webapp'),
    'api_url' => 'https://api.telegram.org/bot',
];

