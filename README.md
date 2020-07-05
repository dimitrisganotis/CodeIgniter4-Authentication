# CodeIgniter 4 - Authentication

A simple authentication system (register-login-logout) for CodeIgniter 4.

## Built With

* HTML & Bootstrap CSS Framework (v4.5)
* CodeIgniter 4 (v4.0.3)
* MySQL

## Installation

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.
* Run `composer install`
* Run `cp env .env`
* Create an empty database for the application and modify database.default settings of the .env file to allow CodeIgniter to connect to the database
* Run `php spark migrate`
* Run `php spark db:seed`
