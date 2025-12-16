<?php

return [
    'bot_token' => env('TELEGRAM_TOKEN'),
    'web_app_url' => env('TELEGRAM_WEB_APP_URL', 'http://localhost/webapp'),
    'api_url' => 'https://api.telegram.org/bot',
    'admin_duplicate' => env('TELEGRAM_ADMIN_DUPLICATE', true),
    'admin_chat_id' => env('TELEGRAM_ADMIN_CHAT_ID', ''),
];

