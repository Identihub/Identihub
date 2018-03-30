
#####
# BUILD ASSETS
#####
FROM node:9 AS assets
COPY . .
RUN npm install && npm run production


#####
# Indentihub image
#####
FROM php:7.2-fpm

MAINTAINER Albatroz Jeremias <ajeremias@coletivos.org>

#####
# SYSTEM REQUIREMENT
#####
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        zlib1g-dev git libgmp-dev \
        libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
        build-essential chrpath libssl-dev libxft-dev \
        libfreetype6 libfontconfig1 libfontconfig1-dev \
    && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/ \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-configure gmp \
    && docker-php-ext-install iconv mbstring pdo pdo_mysql zip gd gmp opcache \
    && rm -rf /var/lib/apt/lists/*
    
# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
		echo 'opcache.memory_consumption=128'; \
		echo 'opcache.interned_strings_buffer=8'; \
		echo 'opcache.max_accelerated_files=4000'; \
		echo 'opcache.revalidate_freq=60'; \
		echo 'opcache.fast_shutdown=1'; \
		echo 'opcache.enable_cli=1'; \
} > /usr/local/etc/php/conf.d/opcache-recommended.ini

#####
# INSTALL COMPOSER
#####
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


#####
# COPY APP
#####
COPY . /var/www/app

RUN composer install --working-dir /var/www/app -o --no-dev --no-interaction --no-progress
RUN chown -R www-data:www-data /var/www/app
RUN mv /var/www/app/storage /var/www/docker-backup-storage
RUN rm -rf /var/www/app/tests
RUN rm -rf /var/www/app/resources/assets

COPY --from=assets public/css /var/www/app/public/css
COPY --from=assets public/js /var/www/app/public/js
COPY --from=assets public/mix-manifest.json /var/www/app/public/mix-manifest.json

######
# DEFAULT ENV
######
ENV LOG errorlog
ENV IS_INSTALLED true

#use to be mounted into nginx for exemple
VOLUME /var/www/app/public

WORKDIR /var/www/app

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]
