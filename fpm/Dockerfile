FROM php:7.4-fpm

# ставим необходимые для нормальной работы модули
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
	libpng-dev \
	libonig-dev \
	libzip-dev \
	libmemcached-dev \
	libmcrypt-dev \
	&& docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin

WORKDIR /data

CMD ["php-fpm"]