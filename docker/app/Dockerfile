FROM php:7.4.6-apache
RUN a2enmod rewrite && service apache2 restart
RUN apt-get update && \
    apt-get install -y \
        libzip-dev zip unzip
RUN docker-php-ext-install zip pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer global require "laravel/lumen-installer"
#RUN composer create-project --prefer-dist laravel/lumen .
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
