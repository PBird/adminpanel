# adminpanel

> composer install

rename .env.example to .env

> php artisan key:generate

set .env file (fill database configs : DB_DATABASE=test2p....)

> echo "create database test2p" | mysql -u root  //creating test2p  database for example 

> chmod -R 777 storage/
> chmod -R 777 bootstrap/cache/
> php artisan migrate
> php artisan db:seed --class=SetUpSiteConf

