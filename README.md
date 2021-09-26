download from https://github.com/shrestharoshan1997/Dream-Choice-Realty zip file.. extract to c/xampp/htdocs

IN COMMAND LINE from the downloaded directory
composer update
rename .env.example to .env
php artisan key:generate
php artisan migrate
php artisan db:seed


php artisan storage:link

composer require laravel/helpers

php artisan serve
