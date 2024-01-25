<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# usersManager-app
Application to manage gym users - Laravel10

## Run Locally
Clone the project
```bash
https://github.com/Niicoph/usersManager-app.git
```
Go to the project directory

```bash
cd usersManager-app
```

Run docker
```bash
docker compose up
```

Install dependencies

```bash
npm install
brew install composer -- {optional} -> if installed just ignore
composer install
```
Create .env

```bash
copy .env.example 
then create .env and replace DB_USERNAME and DB_PASSWORD with root
```
Poblate Database

```bash
php artisan migrate -> {this will also create database}
php artisan migrate:refresh --seed
```
Start the server
```bash
php artisan serve 
```

