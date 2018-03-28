#!/bin/bash

## bug from identihub
cd /var/www/html/ && php artisan key:generate

echo 'start'
exec "$@"