# Быстрый запуск Telegram бота

## Шаги для запуска

### 1. Настройте .env

Добавьте в `.env`:

```env
TELEGRAM_BOT_TOKEN=ваш_токен_от_BotFather
TELEGRAM_WEB_APP_URL=http://localhost/webapp
```

### 2. Запустите контейнеры

```bash
docker-compose up -d
```

### 3. Установите зависимости

```bash
docker-compose exec web composer install
```

### 4. Запустите миграции

```bash
docker-compose exec web php artisan migrate
docker-compose exec web php artisan db:seed
```

### 5. Настройте webhook (для локальной разработки используйте ngrok)

```bash
# Запустите ngrok
ngrok http 80

# Установите webhook (замените YOUR_BOT_TOKEN и ngrok URL)
curl -X POST "https://api.telegram.org/botYOUR_BOT_TOKEN/setWebhook?url=https://your-ngrok-url.ngrok.io/telegram/webhook"
```

## Готово!

Теперь бот готов к работе:

- Отправьте `/shop` в боте - откроется витринка чая
- Задайте вопрос (например, "как заваривать чай") - получите ответ из БД

## Доступные сервисы

- **Приложение**: http://localhost
- **Kafka UI**: http://localhost:8080
- **MySQL**: localhost:3306

