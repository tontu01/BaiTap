# README

## SYSTEM REQUIREMENT

* DB
  - MySQL 5.6
* Apache 
    - 2.4
* PHP
  - 7.0
* Laravel
  - 5.8
* Composer
  - 1.4.1

```
chmod -R 777 bootstrap/cache
chmod -R 777 storage/logs/
chmod -R 777 storage
chmod -R 777 storage/framework
chmod -R 777 public/media
chmod -R 777 public/tmp_uploads

composer install
php artisan config:cache
php artisan config:clear
php artisan cache:clear

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed
```
```
backend: /management/login 
    admin@gmail.com/admin123
```
