FROM php:7.4-apache
ENV TZ=America/Bogota
WORKDIR /var/www/html
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime  \
    && a2enmod rewrite \
    && echo $TZ > /etc/timezone \
    && apt-get update && apt install -y \
    curl \
    libcap2-bin \
    nano \
    wget \
    zlib1g-dev \
    libicu-dev \
    libpng-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli 

COPY . /var/www/html

