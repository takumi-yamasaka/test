FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache --virtual .build-deps \
      $PHPIZE_DEPS \
      zlib-dev \
      libpng-dev \
   && docker-php-source extract \
   && docker-php-ext-install -j$(nproc) \
      gd \
      pdo_mysql \
      zip \
   && docker-php-source delete \
   && apk del .build-deps