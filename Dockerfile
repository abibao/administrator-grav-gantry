FROM php:5-apache

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    wget \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng12-dev \
    libmemcached-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install memcached \
    && docker-php-ext-enable memcached

RUN apt-get update \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

RUN apt-get update \
    && apt-get install -y unzip

USER www-data

WORKDIR /var/www/html

COPY grav-admin-v1.1.8.zip .

RUN unzip -d /tmp grav-admin-v1.1.8.zip \
    && mv /tmp/grav-admin/* /var/www/html \
    && rm -rf /tmp/grav-admin \
    && rm -rf grav-admin-v1.1.8.zip \
    && cp /var/www/html/webserver-configs/htaccess.txt /var/www/html/.htaccess

RUN bin/gpm selfupgrade -f
