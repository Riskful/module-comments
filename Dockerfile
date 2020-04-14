FROM php:7.3-fpm

COPY ./src/ /app/

# Install Dependencies
RUN set -xe \
    && apt-get update && apt-get install -y \
        build-essential \
        autoconf \
        libtool \
        libxml2-dev \
        libc-dev \
        sqlite3 \
        gcc \
        git \
        zip \
        unzip \
        mariadb-client \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        pcntl \
        intl \
    && curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

WORKDIR /app