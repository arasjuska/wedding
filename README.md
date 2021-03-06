# Wedding planning system

## Getting started

### Installation

Please check the official Laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository

    git clone https://github.com/arasjuska/wedding.git

Switch to the repo folder

    cd laravel-example-app

Install all the dependencies using composer

    composer install

Install all the dependencies using npm

    npm install
    npm run dev

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Database seeding

**Populate the database with seed data with relationships which includes users, articles and etc. This can help you to quickly start using it with ready content.**

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

### Login to the system

    email: admin@admin.com
    password: password

----------
