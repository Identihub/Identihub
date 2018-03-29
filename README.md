<h1 align="center">
  <br>
  <a href="https://identihub.co"><img src="https://user-images.githubusercontent.com/5436686/38038733-efdd9d22-32ab-11e8-837e-2ed218ed937d.png" width="350px" alt="Identihub"></a>
  <br>

<p align="center">
  <a href="https://waffle.io/uracreative/identihub?utm_source=badge" target="_blank"><img src="https://badge.waffle.io/uracreative/identihub.png?columns=all" alt="Waffle.io Columns and Card count"></a>
  <br>
  <a href="https://www.gnu.org/licenses/agpl-3.0" target="_blank"><img src="https://img.shields.io/badge/License-AGPL%20v3-blue.svg" alt="GNU AGPL v3"></a>
  <a href="https://travis-ci.org/uracreative/identihub" target="_blank"><img src="https://travis-ci.org/uracreative/identihub.svg?branch=dev" alt="Build Status"></a>
</p>

<h4 align="center">Identihub is open Source brand and visual assets hosting software which can be self-hosted as well.</h4>


<h5 align="center"><a href="https://www.patreon.com/ura" target="_blank"><img src="https://user-images.githubusercontent.com/5436686/38039744-2ddd1e66-32ae-11e8-8cf6-7c16390c2e05.png" width="150" alt="Support on Patreon"></a></h5>

## Screenshot:

![SVG Assets](https://user-images.githubusercontent.com/5436686/38042573-079e8e54-32b5-11e8-9f7f-a899460684dd.png)

---

## Demos: 

* [Identihub](https://demo.identihub.co/project/identihub)
* [Ura Design](https://demo.identihub.co/project/uradesign)
* [Firefox](https://demo.identihub.co/project/firefox)
* [The Tor Project](https://demo.identihub.co/project/tor-project)


---

## Installing
[(Installation guides are located in our wiki)](https://github.com/uracreative/identihub/wiki/Installation-Guide) 

There are are several ways to install Identihub in various configurations
* [From source](https://github.com/uracreative/identihub/wiki/Installation-Guide-%28from-souce%29)
* [Homestead](https://github.com/uracreative/identihub/wiki/Installation-guide-(homestead))


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
