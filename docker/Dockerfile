FROM php:8.2-fpm

# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get upgrade -y

WORKDIR /var/www/