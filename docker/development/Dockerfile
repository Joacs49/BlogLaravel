FROM php:8.3-fpm-alpine

# Instalar dependencias necesarias
RUN apk add --no-cache \
    git curl libpng-dev oniguruma-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar el código (usa .dockerignore para excluir vendor, node_modules, etc.)
COPY ../../ /var/www

# Ajustar permisos (solo a storage y cache)
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache
