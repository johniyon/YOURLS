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
ENV YOURLS_DB_HOST dpg-cs5fg0d6l47c73f4aqq0-a
ENV YOURLS_DB_USER dbshort_user
ENV YOURLS_DB_PASS nY49Wr3ttz9NCt5cdSMUT5UrFRdJz2pU
ENV YOURLS_DB_NAME dbshort

# Expose port 80
EXPOSE 80

# Set correct file permissions
RUN chmod 644 /user/config.php

