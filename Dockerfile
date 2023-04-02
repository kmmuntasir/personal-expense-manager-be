# We're using php 8.2 image
# You are free to use any other version if you like
FROM php:8.2-apache
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Setting our work directory on the docker machine
WORKDIR /app

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libicu-dev \
        libzip-dev \
        unzip \
        git \
        wget \
        mariadb-client

# Install PHP extensions
RUN docker-php-ext-install \
    intl \
    pdo_mysql \
    zip