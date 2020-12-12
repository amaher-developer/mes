<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation

- install composer of project: "composer install"
- install migration of database project: "php artisan migrate"
- run queue to make jobs in background: "php artisan queue:work"
- run unit test to check on code: "php artisan test"

## Coding

- all business logic in "Controller.php" class.
- all views in "welcome.blade.php" file.
- all models class in "Author.php, Book.php".
- all task that running in background in "Jobs/BooksStatusJob.php, Mail/BooksStatusMail.php"

## Resources

- all resources allocate in "./uploads" folder:<br/>
1- books.xlsx use to import file to system.
2- mail_result.jpg is a screenshot of mail result send to sender.

## Mail result

<p align="center">
<img src="./uploads/mail_result.jpg" style="height: 300px;" alt="Build Status">
</p>

## Tools

- Programming Language: PHP 7.2
- Framework: Laravel 7.30

