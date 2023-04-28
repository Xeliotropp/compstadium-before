# Use an official PHP runtime as a parent image
FROM php:8.2-fpm

# Set the working directory to /var/www
WORKDIR /var/www

# Copy the current directory contents into the container at /var/www
COPY . /var/www

# Install any needed packages and extensions
RUN apt-get update && \
    apt-get install -y git zip unzip libzip-dev && \
    docker-php-ext-install pdo pdo_mysql zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    rm -rf /var/lib/apt/lists/*

# Set up the PHP configuration
COPY .docker/php.ini /usr/local/etc/php/conf.d/docker-php.ini

# Expose port 9000 and start PHP-FPM server
EXPOSE 8000
CMD ["php-fpm"]
