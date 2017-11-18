# Minimal
Experimental approach minimal composer WordPress development environment

Requirements:
* PHP and a MySql-database
* PHP Composer

1. `mkdir minimal`
1. `cd minimal`
1. `composer init`
1. `composer update`
1. `composer require composer/installers johnpbloch/wordpress`
1. `mkdir public`
1. Add the extra/wordpress-install-dir in `composer.json`
1. Add required index.php and wp-config.php in the web root "public". Example in this repo.
1. Modify your `public/wp-config.php` to reflect your setup.
1. Install a theme or use this repo minimal theme "Almost Nothing".
1. Point webserver at ./web, eg: `php -S localhost:8000 -t public/`
1. Do the famous 5-minutes install!

Next up! Environment variables with .env

This is just an example of a minimal composer based WordPress development environment.
We advise you to use Roots / Bedrock!
