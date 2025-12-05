# Используем многостадийную сборку для получения git (он не нужен в финальном образе)
FROM alpine/git:latest AS git_downloader

WORKDIR /app

# Клонируем ваш репозиторий. Замените URL на ваш актуальный URL-адрес GitHub.
RUN git clone https://github.com/mastep/portfolio.git


# Используем оригинальный образ как базовый для финального приложения
FROM shinsenter/laravel:dev-php8.3-nginx

WORKDIR /var/www/html


# Копируем скачанные файлы из промежуточного образа (git_downloader)
COPY --from=git_downloader /app/portfolio /var/www/html



RUN composer update



