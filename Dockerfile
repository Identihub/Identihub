FROM debian:unstable

# disable interactive functions
ENV DEBIAN_FRONTEND noninteractive

MAINTAINER Albatroz Jeremias <ajeremias@coletivos.org>

#add-apt-repository ppa:ondrej/php
RUN apt -y update && apt -y upgrade
RUN apt -y install apache2 mysql-server php7.1 libapache2-mod-php7.1 php7.1-mcrypt php7.1-mysql php7.1-curl php7.1-json php7.1-mbstring php7.1-xml composer unzip libmagickwand-dev imagemagick php7.1-dev librsvg2-bin php7.1-imagick 

RUN apt -y remove php7.2-* php7.0-*

COPY ./ /var/www/html

RUN mkdir -p /var/www/html/storage/framework/sessions/
RUN mkdir -p /var/www/html/storage/framework/cache/
RUN mkdir -p /var/www/html/storage/framework/views/

RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html

RUN composer install

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ADD ./000-default.conf /etc/apache2/sites-available/

RUN a2enmod rewrite

ENV LOG errorlog

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2ctl", "-D", "FOREGROUND"]