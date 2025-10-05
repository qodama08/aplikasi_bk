# Stage 1: build PHP dependencies
FROM composer:2.7 AS builder

WORKDIR /app
COPY . .
RUN composer install --no-dev --no-interaction --prefer-dist

# Stage 2: final image (PHP + Nginx + SQLite)
FROM php:8.2-fpm-alpine

# Install dependencies
RUN apk add --no-cache nginx supervisor sqlite bash curl libpng-dev oniguruma-dev libzip-dev zip unzip git \
    && docker-php-ext-install pdo pdo_sqlite mbstring bcmath gd zip

# Create working directories
WORKDIR /var/www

# Copy Laravel app from builder
COPY --from=builder /app .

# Copy .env.example -> .env (if not exists)
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Prepare SQLite
RUN mkdir -p database && touch database/database.sqlite

# Set permissions
RUN chown -R www-data:www-data /var/www && chmod -R 775 storage bootstrap/cache database

# Generate app key & migrate during build
RUN php artisan key:generate && php artisan migrate --seed || true

# Copy Nginx and Supervisor configs
COPY ./docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY ./docker/supervisord.conf /etc/supervisord.conf

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM together
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
