<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Junges\Kafka\Facades\Kafka;
use App\Consumers\TelegramUpdateConsumer; // Импортируем ваш класс

class ConsumeTelegramUpdatesTopic extends Command
{
    protected $signature = 'app:consume-telegram-updates';
    protected $description = 'Start consuming messages from the telegram updates topic.';

    public function handle()
    {
        $this->info('Starting Kafka consumer for topic: telegram_update');

        // !!! ИСПРАВЛЕНИЕ ЗДЕСЬ !!!
        // 1. Просим Laravel создать экземпляр класса со всеми зависимостями (DI)
        $consumerHandlerInstance = app(TelegramUpdateConsumer::class);

        // 2. Передаем готовый, полностью инициализированный объект в withHandler()
        Kafka::consumer()
            ->subscribe(['telegram_update'])
            ->withHandler($consumerHandlerInstance)
            ->withAutoCommit()
            ->withOptions([
                'auto.offset.reset' => 'earliest'
            ])
            ->build()
            ->consume();
    }
}
