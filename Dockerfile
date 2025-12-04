# Используем многостадийную сборку для получения git (он не нужен в финальном образе)
FROM alpine/git:latest AS git_downloader

WORKDIR /app

# Клонируем ваш репозиторий. Замените URL на ваш актуальный URL-адрес GitHub.
RUN git clone https://github.com/mastep/portfolio.git


# Используем оригинальный образ как базовый для финального приложения
FROM shinsenter/laravel:dev-php8.3-nginx

WORKDIR /var/www/html

ARG TELEGRAM
ARG DB_CONNECTION
ARG DB_HOST
ARG DB_PORT
ARG DB_DATABASE
ARG DB_USERNAME
ARG DB_PASSWORD


#################################################################
RUN echo "-----------------------${TELEGRAM}----------------------------------------------"

ENV TELEGRAM=${TELEGRAM}
ENV DB_CONNECTION=${DB_CONNECTION}
ENV DB_HOST=${DB_HOST}
ENV DB_PORT=${DB_PORT}
ENV DB_DATABASE=${DB_DATABASE}
ENV DB_USERNAME=${DB_USERNAME}
ENV DB_PASSWORD=${DB_PASSWORD}


# Копируем скачанные файлы из промежуточного образа (git_downloader)
COPY --from=git_downloader /app/portfolio /var/www/html



RUN composer update



