<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About The Project

Content Management system for the Atrium Restaurants on Elliot Street, This Content Management System allows the restaurants to create a restaurant page with all restaurant common details like menus, opening hours, social media, description, names, etc... The project has use the laravel framework which provides the following features:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Usage

In order to run this project you need to follow the following steps.

- Donwload and install xampp in their latest version(https://www.apachefriends.org/index.html).
- Clone this project into the htdocs file which is accesible after installing the latest xampp version. This will be inside the folder where you install xampp.
- Open your favorite code editor and write the following commands in the terminal. I recommend using vs code terminal as it is efficient and simple for anyone to undertand

Install Composer packages:
```bash
php composer install
```

Install NPM packages:
```bash
php composer install
```
- After installing the packages the last thing you need to do is to create a database in the php admin and run the migrations to fill the database with all the data as well as setting up your .env file with your database details. an example of this file can be found in the project folder.

Run migrations and seeds:
```bash
php artisan migrate --seed
```
