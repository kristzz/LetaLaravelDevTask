# Laravel Social media app

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js & NPM
- Laravel
- SQLite
- Git

## Installation and Setup


### Clone the repository
```
git clone https://github.com/kristzz/LetaLaravelDevTask.git
```

### If you are not already in the projects folder, navigate to the project directory

### Install PHP dependencies
```
composer install
```
### Install JavaScript dependencies
```
npm install
```
### Copy environment variables
```
cp .env.example .env
```
### Generate Laravel application key
```
php artisan key:generate
```
### Database already comes configured

### Run database migrations
```
php artisan migrate

It will say that the database doesn't exist and will ask if it needs to make one for you, choose 'yes' to make the database
```
### Seed the database with sample data
```
php artisan db:seed
```
### Open two terminals in the project directory and run the following in each:

### Serve the Laravel application
```
php artisan serve
```
### Compile assets with Laravel Mix
```
npm run dev
```

### Accessing the Application

After running the server, visit http://127.0.0.1:8000/ in your browser to access the application.


### There is a test account already made to login straight up but you can always register your own account

#### Details for the test account
```
email: test@test.lv
password: testtest
```
