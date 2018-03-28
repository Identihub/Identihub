[![Waffle.io - Columns and their card count](https://badge.waffle.io/uracreative/identihub.png?columns=all)](https://waffle.io/uracreative/identihub?utm_source=badge)
[![License: AGPL v3](https://img.shields.io/badge/License-AGPL%20v3-blue.svg)](https://www.gnu.org/licenses/agpl-3.0)
[![Build Status](https://travis-ci.org/uracreative/identihub.svg?branch=dev)](https://travis-ci.org/uracreative/identihub)
# Identihub

Identihub is an open-source web platform for brand and assets management. It is being developed by the folks at Ura Design and contributors around the world.

## Demos: 
- https://demo.identihub.co/project/uradesign
- https://demo.identihub.co/project/firefox
- https://demo.identihub.co/project/ooni


---

## Installing
[Installation guides are located at our wiki](https://github.com/uracreative/identihub/wiki/Installation-Guide)

### Using docker 
copy the .env.docker to .env (edit the file according to your own needs)

`$ docker-compose run web php artisan migrate`
`$ docker-compose run web php artisan db:seed`
`$ docker-compose run web php artisan key:generate`
`$ docker-compose up`

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
