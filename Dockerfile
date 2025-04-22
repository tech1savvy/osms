# Use the official PHP Apache image
FROM php:8.2-apache

# Enable Apache mod_rewrite (optional but common for routing)
RUN a2enmod rewrite

# Set working directory inside the container
WORKDIR /var/www/html

# Copy your PHP project files into the container
COPY . /var/www/html

# (Optional) Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache default)
EXPOSE 80

# Apache is already the default CMD in this image, no need to override
