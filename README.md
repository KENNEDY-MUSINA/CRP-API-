# CRP-API-
Pulling data from API endpoints and storing in Mysql db

I am using Php laravel 8 Guzzle Http Client GET  and mysql database
For  Guzzle Http v-7x comes alraedy installed on laravel 8x you don't have to install.
You can check in composer.json dependencies.

First create laravel project via composer using CLI

composer create-project laravel/laravel your-example-name

Start laravel local development server using Artisan CLI command
php artisan serve

create a database and go to your project .env file and edit your database name, i used a_imsoft as my database name in .env file.

Go to url http://www.opensecrets.org
Sign up or login if you already have account to generate your ApiKey
Go to candSummary doc and generate the key

To  the project create migration table using command 

php artisan make:migration create_politinfo_table

Go to the new table add the fields according to your candSummary documentation fields
Migrate the table using command

php artisan migrate

Create a model using command 

php artisan make:model your_model  //I created PoliticianData as my model

Give the protected fillable in your model you can view my code PoliticianData.php 

Create a controller using command 
php artisan make:controller your_cotroller // I created PoliticianController as my controller you view PoliticianController.php in the above codes
In controller first  use Illuminate\Support\Facades\Http and also import your model as i used PoliticianData model
Write the function that will store the data to the database 
Then Write Get request that will retrieve the data from our extenal server URL and store the data to our  database 
Doing so you should give your params as an array for we used cid,apikey,output(optional) and cycle and also I specified header as application json
Then we return the response You can view PoliticianController.php line 11 to 43

Go to the routes web.php and make route see web.php
Hit the route and the data will be populated in your database









