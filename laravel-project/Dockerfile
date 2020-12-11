FROM php:7.4-apache

RUN apt-get update

# Install some utils
RUN APt-get install -y \
    curl \
    git \
    supervisor \
    zip \
    unzip

# PHP ext
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN ae2enmod rewrite

ENV APP_HOME /var/www/html

RUN mkdir -p /opt/data/public && \
    rm -r /var/www/html && \
    ln -s /opt/data/public ${APP_HOME}

WORKDIR ${APP_HOME}