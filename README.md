<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About DevTest

DevTest is a Laravel web application development test. The application will perform a CRUD on gigs and manage few model relationships. Authentication is also a key emphasis. Having completed the basic need of the project, the project will be able to handle the following requests:

-   [Register New User](https://devtest.bumasys.com/api/v1/auth/register).
-   [Login a User](https://devtest.bumasys.com/api/v1/auth/login).
-   [Create a New Gig](https://devtest.bumasys.com/api/v1/gig).
-   [Update a Gig](https://devtest.bumasys.com/api/v1/gig).
-   [View a Gig](https://devtest.bumasys.com/api/v1/gig).
-   [Delete a Gig](https://devtest.bumasys.com/api/v1/gig).
-   [View all Gigs](https://devtest.bumasys.com/api/v1/gig).

Emphasis is placed on user role, if a normal user did not create a gig, and he/she is not an admin or super admin, he/she won't be able to update or delete that gig, but can view.

The full API documentation of this project can be found here:
<a href="https://devtest.bumasys.com/api/documentation" target="_blank">https://devtest.bumasys.com/api/documentation</a>

## To Deploy

-   Clone this repository
-   Run composer install
-   Run php artisan migrate
-   Run php artisan db:seed
-   Run php artisan passport:install --force
-   Run php artisan serve

And voila. To run the above commands, remember to setup your database and add the settings in your .env file. This installation comes with a sample .env file, just rename it to .env

## DevTest Connection

Follow me @optimalresource.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
