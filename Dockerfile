FROM php:8.2-fpm

WORKDIR "/var/app"

RUN apt update \
    && apt install -y git vim zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
