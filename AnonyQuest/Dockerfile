FROM php:8.3

RUN apt-get update -y \
    && apt-get install -y openssl zip unzip git libzip-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . /app

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
