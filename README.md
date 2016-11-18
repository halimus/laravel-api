# JWT Laravel API

This example use [The Dingo API package](https://github.com/dingo/api/) and [jwt-auth](https://github.com/tymondesigns/jwt-auth)

###Step 1 : Use Composer to install dependencies

    cd /path/to/laravel-api

    composer install
    
###Step 2: Create Database
   Create Database in Your local MySQL (choose name), And configure that name in your .env file.
   
   Make sure also to out at  API_PREFIX=api in your .env file Like this 
   
       API_PREFIX=api
       API_NAME="My API"
       API_VERSION=v1
       API_DEBUG=false
       
   for more detail about JWT please check the [documentation](https://github.com/tymondesigns/jwt-auth/wiki)
   
###Step 3 Run migrations

    >php artisan migrate
    
    
###Step 4 Run seeder
    If you like to populate little your database with random data, just run seeder

    >php artisan db:seed --class=UserTableSeeder


###Start Accessing the Demo

#### Get all users
![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/1.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/2.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/3.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/4.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/5.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/6.JPG)

![alt tag](https://github.com/halimus/laravel-api/blob/master/public/images/7.JPG)

