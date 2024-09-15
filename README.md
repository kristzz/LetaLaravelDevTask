# Laravel Social media app

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js & NPM
- Laravel
- SQLite
- Git

# Installation and Setup


## Clone the repository
```
git clone https://github.com/kristzz/LetaLaravelDevTask.git
```

## Navigate to the project directory
```
cd LetaLaravelDevTask
```
## Install PHP dependencies
```
composer install
```
## Install JavaScript dependencies
```
npm install
```
## Copy environment variables
```
cp .env.example .env
```
## Generate Laravel application key
```
php artisan key:generate
```
## Database already comes configured

## Run database migrations
```
php artisan migrate
```
## Seed the database with sample data
```
php artisan db:seed
```
# Open two terminals and run the following in each:

## Serve the Laravel application
```
php artisan serve
```
## Compile assets with Laravel Mix
```
npm run dev
```

## Accessing the Application

After running the server, visit http://http://127.0.0.1:8000/ in your browser to access the application.
