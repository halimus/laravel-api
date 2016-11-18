# JWT Laravel API

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
       
   for more detail about JWT please check the documentation [I'm an inline-style link](https://www.google.com)
   
###Step 3 Run migrations

    >php artisan migrate
    
    
###Step 4 Run seeder
    If you like to populate little your database with random data, just run seeder

    >php artisan db:seed --class=UserTableSeeder


###Start Accessing the Demo

