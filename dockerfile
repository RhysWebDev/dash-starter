# Use the official PHP image with the desired version
FROM php:8.1-fpm-alpine

# Install required dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    mysql-client \
    git \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Bedrock project files
COPY . .

# Install Bedrock, Sage, and Yarn
RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && cd web/app/themes/dash-starter \
    && npm install --global yarn \
    && yarn \
    && yarn build

# Copy Nginx and Supervisor configurations
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf

# Expose ports
EXPOSE 80

# Start Nginx and PHP-FPM using Supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]
