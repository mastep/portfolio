<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Junges\Kafka\Facades\Kafka;
// Если класс Message использовался, его нужно импортировать
// use Junges\Kafka\Message\Message; // Хотя этот класс может быть не нужен с этим синтаксисом

class KafkaService
{
    // ... (конструктор и свойства остаются прежними) ...
    private string $brokers;
    private string $topic;
    private string $groupId;

    public function __construct()
    {
        $this->brokers = config('kafka.brokers');
        $this->topic = config('kafka.topic_telegram_updates', 'telegram_update');
        $this->groupId = config('kafka.group_id');
    }

    /**
     * Отправка сообщения в Kafka с использованием альтернативного синтаксиса
     */
    public function produceMessage(array $payload, string $key = null): bool
    {
        try {
            // Используем метод publish(), передавая ему список брокеров
            $producerBuilder = Kafka::publish($this->brokers)
                // Затем указываем топик через onTopic()
                ->onTopic($this->topic);

            // 1. Устанавливаем тело сообщения (преобразуем массив в JSON строку)
            $producerBuilder->withBody(json_encode($payload));

            // 2. Если передан ключ, устанавливаем его
            if ($key !== null) {
                // withKafkaKey должен работать
                $producerBuilder->withKafkaKey($key);
            }

            // Отправляем сообщение
            $producerBuilder->send();

            Log::info('Kafka message produced successfully', [
                'topic' => $this->topic,
                'key' => $key,
                'payload' => $payload,
            ]);

            return true;
        } catch (\Exception $e) {
            Log::error('Kafka produce error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Потребление сообщений из Kafka (заглушка/пример)
     */
    public function consumeMessages(callable $callback): void
    {
        Log::info('Kafka consumer logic should be implemented in an Artisan Command Handler.');
    }
}
