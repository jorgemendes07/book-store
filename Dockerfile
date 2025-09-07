# Etapa 1: PHP + Composer
FROM php:8.2-fpm AS build

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev curl \
    && docker-php-ext-install pdo_mysql zip gd

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar todos os arquivos do projeto
COPY . .

# Instalar dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Limpar caches do Laravel
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Etapa 2: Nginx + PHP-FPM
FROM nginx:alpine

# Definir diretório
WORKDIR /var/www

# Copiar app da etapa anterior
COPY --from=build /var/www /var/www

# Copiar configuração do nginx
COPY ./docker/nginx.conf /etc/nginx/conf.d/default.conf

# Expõe a porta
EXPOSE 80

# Comando para iniciar
CMD ["nginx", "-g", "daemon off;"]
