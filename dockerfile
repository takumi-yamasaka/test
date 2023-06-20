# Dockerfile
FROM php:7.4-fpm

WORKDIR /var/www/html

# PHPとLaravelに必要な拡張機能をインストール
RUN docker-php-ext-install pdo_mysql
RUN apt-get update && \
    apt-get install -y zip unzip

# Composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
