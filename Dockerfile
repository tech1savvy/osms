# Use the official PHP Apache image
FROM php:8.2-apache

# Install extensions needed (mysqli for MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to the Apache server root
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html
