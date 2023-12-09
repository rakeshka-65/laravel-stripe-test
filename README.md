download the code

create database and 

run the following commands 

composer install

php artisan migrate

php artisan db:seed --class=ProductSeeder

get the stripe keys from their developer console and add to env file

STRIPE_KEY=pk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
STRIPE_SECRET=sk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
