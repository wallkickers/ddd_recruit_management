FROM php:8.0.11-fpm-bullseye

RUN apt-get update && apt-get install -y \
    git vim libzip-dev unzip \
    && apt-get clean \
RUN docker-php-ext-install pdo_mysql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html