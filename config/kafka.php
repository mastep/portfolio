<?php

return [
    'brokers' => env('KAFKA_BROKERS', 'localhost:9092'),
    'topic' => env('KAFKA_TOPIC', 'telegram_messages'),
    'group_id' => env('KAFKA_GROUP_ID', 'telegram_bot_group'),
];

