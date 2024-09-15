download project

composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan seed:db


open 2 terminals

npm run dev
and 
php artisan serve
