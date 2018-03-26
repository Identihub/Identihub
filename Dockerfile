FROM php:7.1-fpm

MAINTAINER Albatroz Jeremias <ajeremias@coletivos.org>

#####
# SYSTEM REQUIREMENT
#####
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libmcrypt-dev zlib1g-dev git libgmp-dev \
        libfreetype6-dev libjpeg62-turbo-dev libpng12-dev \
        build-essential chrpath libssl-dev libxft-dev \
        libfreetype6 libfontconfig1 libfontconfig1-dev
    # && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/
# RUN apt-get update && apt-get install -y --no-install-recommends 
# RUN apt-get install libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev zlib1g-dev git libgmp-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-configure gmp 
RUN docker-php-ext-install iconv mcrypt mbstring pdo pdo_mysql zip gd gmp opcache 
    
#
# sRUN     
    # apt-get install  apache2 mysql-server php libapache2-mod-php php-mcrypt 
    # php-mysql php-curl php-json php-mbstring php-xml composer unzip libmagickwand-dev imagemagick 
    # php-dev librsvg2-bin php-imagick
    
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


COPY ./ /var/www/html

RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html

RUN composer install

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]