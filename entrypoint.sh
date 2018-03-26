#!/bin/bash

if [ ! -f "/var/www/html/installed" ]; then
    touch /var/www/html/installed
    cd /var/www/html/
    php artisan migrate
    php artisan db:seed
    php artisan passport:install
    php artisan key:generate
fi

cd /var/www/html
ls
sleep 100000;