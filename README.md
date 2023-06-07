![imgonline-com-ua-twotoone-2qzQCDDOF9GOlt](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/cf72ac5a-0244-46af-8c70-286f038c597f)



# Twilio SMS Message API in Laravel 10


This repository provides an implementation of the Twilio SMS Message API using Laravel 10.


## Laravel Documentation

For detailed information on how to install Laravel 10 and create your first Laravel project, refer to the <a href="https://laravel.com/docs/10.x/installation#your-first-laravel-project" target="_blank">Laravel documentation.</a>


## Usage

This project allows you to send free SMS messages to your own number using a free Twilio account.


## Installation Steps


Follow these steps to install Laravel and set up the project:


1    Create a new Laravel project using the following command:

```
composer create-project laravel/laravel example-app
```


![4](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/2d2e1016-f588-4d70-9dcd-03e5bde8d88d)


2    Change to the project directory:

![5](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/91aa4d55-64b8-46cd-86f9-207ea94f8944)

```
cd example-app
```


3    Install project dependencies using Composer:


![6](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/002de70e-3297-4435-90f4-9fe311a7104d)

```
composer install
```

4    Run Composer's autoload dump:


![7](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/648b9d98-3450-45e9-8d87-df60584664ea)

```
composer dump-autoload
```


#   Clearing Cache


After installing Composer, it's recommended to clear the cache. Run the following commands:


1    Clear route cache:  **php artisan route:clear**
    
2    Clear configuration cache:  **php artisan config:cache**

3    Clear view cache:   **php artisan view:clear**

4   Optimize the application:  ** php artisan optimize**


#   Running the Laravel App

To run the Laravel application, execute the following command:


![1t](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/26497595-fe3c-4b18-9c28-31be504f4dc2)


#   Setting Up a Twilio Free Account


**Twillo Docs:-**    https://www.twilio.com/docs


To obtain the necessary credentials for the Twilio SMS Message API, follow these steps:


1    **Create a free Twilio accoun**t by visiting this <a href="https://www.twilio.com/try-twilio" target="_blank">link.</a>


2    Generate a free phone number with Twilio.


3    Access your account information to find your Account SID, Auth Token, and My Twilio phone number. Refer to the Twilio documentation for more details.


![Screenshot 2023-06-04 210905 (1)](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/ea7959a4-c377-43b4-96bc-b997329a498d)




#   Laravel Web Application

![8](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/9ee5c54e-b3f2-4486-80c5-5869aa91e03e)



##  Create a Env file:-

**Add your Account SID, Auth Token, and My Twilio phone number on env file**

![9](https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/assets/86715574/4c612912-90fa-44b9-a9fb-14d4b6fe956f)



## Create a Controller file with command or You can check file on this path

    **Command:-**

    php artisan make:controller twilloController

    https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/blob/master/app/Http/Controllers/twilloController.php


##  Create a route file

    https://github.com/hiteshcreator/Laravel-10-Twillo-SMS-API/blob/master/routes/web.php
