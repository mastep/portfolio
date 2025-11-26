# Telegram чат-бот с витринкой чая

Telegram бот на Laravel с интеграцией Kafka для обработки сообщений и Telegram Web App для витринки товаров.

## Функции

1. **Ответы на вопросы пользователей** - бот ищет ответы в базе данных
2. **Команда /shop** - открывает демо витринку чая с 10 товарами в Telegram Web App

## Быстрый старт

### 1. Настройка .env

Добавьте в ваш `.env` файл следующие переменные:

```env
# Telegram Bot
TELEGRAM_BOT_TOKEN=your_bot_token_here
TELEGRAM_WEB_APP_URL=http://localhost/webapp

# Kafka
KAFKA_BROKERS=kafka:29092
KAFKA_TOPIC=telegram_messages
KAFKA_GROUP_ID=telegram_bot_group

# База данных (уже настроена для Docker)
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=telegram_bot
DB_USERNAME=telegram_user
DB_PASSWORD=telegram_password
```

### 2. Запуск Docker контейнеров

```bash
docker-compose up -d
```

### 3. Установка зависимостей

```bash
docker-compose exec web composer install
```

### 4. Запуск миграций и заполнение БД

```bash
docker-compose exec web php artisan migrate
docker-compose exec web php artisan db:seed
```

### 5. Настройка Telegram Webhook

Получите токен бота у [@BotFather](https://t.me/BotFather) и укажите его в `.env`.

Для локальной разработки используйте ngrok:

```bash
ngrok http 80
```

Затем установите webhook:

```bash
curl -X POST "https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook?url=https://your-ngrok-url.ngrok.io/telegram/webhook"
```

Или создайте простой скрипт:

```php
<?php
require 'vendor/autoload.php';

$app = require 'bootstrap/app.php';
$telegramService = app(\App\Services\TelegramService::class);
$telegramService->setWebhook('https://your-ngrok-url.ngrok.io/telegram/webhook');
```

## Использование

### Команды бота

- `/shop` - открывает витринку чая в Telegram Web App
- Любой вопрос - бот ищет ответ в базе данных

### API Endpoints

- `POST /telegram/webhook` - Webhook для получения обновлений от Telegram
- `GET /webapp` - Telegram Web App (витринка чая)
- `GET /api/products` - API для получения списка товаров

## Структура проекта

```
app/
├── Http/Controllers/
│   ├── TelegramController.php    # Обработчик webhook от Telegram
│   └── WebAppController.php      # Контроллер для Web App
├── Models/
│   ├── QA.php                    # Модель вопросов/ответов
│   └── Product.php               # Модель товара
└── Services/
    ├── TelegramService.php       # Сервис для работы с Telegram API
    └── KafkaService.php          # Сервис для работы с Kafka

database/
├── migrations/
│   ├── 2024_01_01_000001_create_qa_table.php
│   └── 2024_01_01_000002_create_products_table.php
└── seeders/
    ├── ProductSeeder.php         # Сидер для товаров (10 чаев)
    └── QASeeder.php              # Сидер для вопросов/ответов

resources/views/
└── webapp.blade.php              # Telegram Web App (витринка)

config/
├── telegram.php                  # Конфигурация Telegram
└── kafka.php                     # Конфигурация Kafka
```

## Добавление вопросов/ответов

Вы можете добавить вопросы и ответы через базу данных:

```php
use App\Models\QA;

QA::create([
    'question' => 'ваш вопрос',
    'answer' => 'ответ на вопрос',
]);
```

Или через сидер:

```bash
docker-compose exec web php artisan db:seed --class=QASeeder
```

## Kafka

Kafka используется для асинхронной обработки сообщений. В текущей реализации используется упрощенная версия с логированием. Для продакшена рекомендуется использовать библиотеку `rdkafka` или `enqueue/rdkafka`.

## Примечания

- Убедитесь, что ваш сервер доступен из интернета для работы webhook
- Telegram Web App требует HTTPS (кроме localhost)
- Для локальной разработки используйте ngrok или аналогичный сервис

