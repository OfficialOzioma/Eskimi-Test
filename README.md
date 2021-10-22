<p align="center" backgroud="red"><a href="https://business.eskimi.com/" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSft8NBt5DZIX-7EH-1FwgbhDoLYb3Q8N7DSw&usqp=CAU" width="400"></a></p>

## About Project

This project is developed for Eskimi SSP senior full-stack PHP developer task.

## Technologies
- PHP
- Laravel
- Mysql
- Docker
- VueJs

## Installation Process
*Docker is available in this project. Please install Docker before start. Click [here](https://www.docker.com/) to know about Docker. For installation guide please follow [this](https://www.docker.com/get-started) link.*

**This project used Laravel Sails command to interact with docker Read about Laravel sails [here](https://laravel.com/docs/8.x/sail)**

- __Step 1:__ Clone this project `https://github.com/OfficialOzioma/Eskimi-Test.git`. 
- __Step 2:__ For getting into project directory run  
    > `cd Eskimi-Test folder`
- __Step 3:__ Now create environment file
    > `cp .env.example .env`
- __Step 4:__ Now setup database configuration into .env
    > open the Eskimi-Test folder in any text editor of your choice and edit the .env file.

        DB_CONNECTION=mysql
        DB_HOST=mysql
        DB_PORT=3306
        DB_DATABASE=database name
        DB_USERNAME=database username
        DB_PASSWORD=database password

  fill in your database datails DB section in the .env file. It's highly recommended to create new database user in MySql database with specific database permission and privileges. And use that credential here.
- __Step 5:__ Make sure that your database datails are correct in your 
    .env file
- __Step 8:__ Now to build docker
    > run ./vendor/bin/sail up
- __Step 9:__ Login mysql container for creating database
    > docker exec -it laradock_mysql_1 bash
- __Step 10:__ Login mysql console
    > mysql -uroot -proot
- __Step 11:__ Create new database
    > create database eskimi;
- __step 12:__ Exit from mysql console
    > exit
- __Step 13:__ Exit from mysql container
    > exit
- __Step 14:__ Now login into workspace container for application setup
    > docker exec -it laradock_workspace_1 bash
- __Step 15:__ Download laravel dependencies 
    > composer install
- __Step 16:__ Now create environment key for laravel
    > php artisan key:generate
- __Step 17:__ Create soft link with storage folder 
    > php artisan storage:link
- __Step 17:__ Now browse http://localhost/ for application
- __Step 18:__ For system test 
    > php artisan test



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

