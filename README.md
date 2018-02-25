[![Waffle.io - Columns and their card count](https://badge.waffle.io/uracreative/identihub.png?columns=all)](https://waffle.io/uracreative/identihub?utm_source=badge)
[![License: AGPL v3](https://img.shields.io/badge/License-AGPL%20v3-blue.svg)](https://www.gnu.org/licenses/agpl-3.0)
[![Build Status](https://travis-ci.org/uracreative/identihub.svg?branch=dev)](https://travis-ci.org/uracreative/identihub)
# Identihub

Identihub is an open-source web platform for brand and assets management. It is being developed by Ura Design, an open-source design agency.
=
## Demos: 
- https://demo.identihub.co/project/uradesign
- https://demo.identihub.co/project/firefox
- https://demo.identihub.co/project/ooni


---

## Installing
### Homestead
1. Map Identihub on `Homestead.yaml`.
2. Copy the `.env.example` to `.env` and update the latter accordingly.
3. Run Vagrant.

### Without Homestead (Apache)
#### Installing the software
```bash
apt-get update && apt-get upgrade
apt-get install  apache2 mysql-server php libapache2-mod-php php-mcrypt php-mysql php-curl php-json php-mbstring php-xml composer unzip libmagickwand-dev imagemagick php-dev librsvg2-bin php-imagick
```
#### Setting up the database
```bash
CREATE DATABASE identihub DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL ON identihub.* TO 'identihubuser'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
exit
```
#### Configure Apache
```bash
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/public

    <Directory /var/www/html/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    <IfModule mod_dir.c>
        DirectoryIndex index.php index.pl index.cgi index.html index.xhtml $
    </IfModule>
</VirtualHost>
```
(Assumes you have installed Identihub in /var/www/html)
```bash
a2enmod rewrite
systemctl restart apache2
```
#### Configure Identihub
```bash
cp .env.example .env
nano .env
```
Edit 'DB_DATABASE' 'DB_USERNAME' and 'DB_PASSWORD' 
#### Install Identihub's dependencies:
  `composer install`

#### Migrate the Identihub database (this will create the database tables):
`php artisan migrate`

#### Seed the Identihub database (this will populate the database with initial values):
  `php artisan db:seed`

#### Install Laravel Passport. This is related to the API's authentication:
  `php artisan passport:install`
  
#### Generate  AES-128-CB & AES-256-CBC:
  `php artisan key:generate`

#### Set up the Mail server
Find the `MAIL_*` entries in the `.env` file and update them with your necessary E

#### (Optional) Modify `/etc/hosts` on the host machine to include identihub:
```
192.168.10.10   identihub.test

```
Modify the `Homestead.yaml` (in the Homestead directory) to add an alias `identihub.test` to the project's document root.
```

.....
sites:
    - map: identihub.test
      to: /home/vagrant/code/identihub/public
      php: "7.2"
.....
```

#### Finishing steps
1. Navigate to your server URL from the web browser.
2. Click Continue.
3. Enter localhost in 'database host', your database settings, and fill the rest.

Note: Please use HTTPS. You can get a free SSL certificate using Let's Encrypt. Your users deserve security.

---

## Troubleshooting
### Homestead
* *I'm getting an error message upon deployment: "The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths."*

  Run the following within your Vagrant box:

  `php artisan key:generate`

  `php artisan config:clear`


---

## Bug Reporting
To help identify and subsequently fix bugs faster, make sure to include some basic information in your report.

1. Expected Results (e.g. Successful User Login)
2. Actual Results (e.g. User Login Interrupted with Error Message...)
3. Browser (e.g. Mozilla Firefox) and Screen Resolution (e.g. 1920x1080)
4. Steps to Reproduce (e.g. Access Main Page, Hit Login, Fill In Login Form, Hit Submit Button)

---

## Contributing Code

Simply create a branch based on the `dev` branch, do your changes, and open it as a pull request. Ideally write tests for the feature or bugfix you propose.
