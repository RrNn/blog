## Simple Blog

###### Pre-requisites

- PHP 7.2 and greater
- Composer 1.6.5 or greater
- Node 10.4.0 or greater
- Yarn / Npm
- `mysql` or `postgres` depending on what driver you prefer for your database.
- Remeber to create a `.env` file and populate it. You can checkout the `.env.example` file.

- Clone the app, and cd into it, ie `cd blog`
- Run, `composer install`
- Run `yarn install` or `npm install` if you prefer **npm**
- Run `php artisan migrate`

Run the command `php artisan serve` then visit `localhost:8000` in your browser.
