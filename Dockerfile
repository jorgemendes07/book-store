FROM php:8.2-cli

WORKDIR /app

# Instala extensões do Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev \
    && docker-php-ext-install pdo_mysql zip gd

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia arquivos
COPY . .

# Instala dependências
RUN composer install --no-dev --optimize-autoloader

# Gera chave
RUN php artisan key:generate --show > /tmp/app.key && \
    echo "APP_KEY=$(cat /tmp/app.key)" >> .env

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public