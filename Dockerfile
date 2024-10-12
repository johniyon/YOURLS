# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli

# Set environment variables
ENV YOURLS_DB_HOST your_db_host
ENV YOURLS_DB_USER your_db_user
ENV YOURLS_DB_PASS your_db_password
ENV YOURLS_DB_NAME your_db_name

# Expose port 80
EXPOSE 80
