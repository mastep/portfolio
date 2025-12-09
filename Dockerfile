# Используем многостадийную сборку для получения git (он не нужен в финальном образе)
#FROM alpine/git:latest AS git_downloader

#WORKDIR /app

# Клонируем ваш репозиторий. Замените URL на ваш актуальный URL-адрес GitHub.
#RUN git clone https://github.com/mastep/portfolio.git


# Используем оригинальный образ как базовый для финального приложения
FROM shinsenter/laravel:dev-php8.3-nginx

WORKDIR /var/www/html



# Копируем скачанные файлы из промежуточного образа (git_downloader)
#COPY --from=git_downloader /app/portfolio /var/www/html



COPY . /var/www/html


# Устанавливаем системные зависимости:
# build-essential, autoconf, automake, librdkafka-dev
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y \
    build-essential \
    autoconf \
    automake \
    librdkafka-dev \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем само PHP-расширение через PECL и активируем его
RUN pecl install rdkafka \
    && docker-php-ext-enable rdkafka


RUN composer update

RUN cp .env.example .env

RUN php artisan key:generate
