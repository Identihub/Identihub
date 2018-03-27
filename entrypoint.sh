#!/bin/bash

## change this to wait for database
sleep 40;

if [ -f /installed ]; then
    php artisan migrate
    php artisan db:seed
    php artisan passport:install
    php artisan key:generate
    touch /installed
fi

tail -f /var/log/apache2/*
