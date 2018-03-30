#!/bin/bash
set -e

if [ ! -d /var/www/app/storage ]; then
	cp -Rp /var/www/docker-backup-storage /var/www/app/storage
else
	
	IN_STORAGE_BACKUP="$(ls /var/www/docker-backup-storage/)"
	for path in $IN_STORAGE_BACKUP; do
		if [ ! -e "/var/www/app/storage/$path" ]; then
			cp -Rp "/var/www/docker-backup-storage/$path" "/var/www/app/storage/"
		fi
	done
fi

echo 'start'
exec "$@"