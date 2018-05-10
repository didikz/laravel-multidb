## Laravel Multiple Database Connection

This is an example of Laravel with multiple database connections for operating Eloquent Relationship and join query.

There are three connections:
1. `mysql` (MySQL) as default
2. `mysql2` (MySQL)
3. `sqlsrv` (SQL Server 2016)

## Installing & Running
```
git clone https://github.com/didikz/laravel-multidb.git
composer install
```
Copy .env.example as .env file and setup your database configuration. If you don't have SQL server, feel free to use another database engine but don't forget to adjust your new connection.
```
php artisan key:generate
php artisan migrate
php artisan db:seed --class=IsiTableSeeder
php artisan serve
```

Visit your browser to `http://localhost:8000/publishing` to get data from multiple database connections. Open `routes/web.php` to check available routes;

## Table Migration & Model
There are three migration tables with different connection:
1. `types` table / model in `mysql2` connection
2. `posts` table / model in `mysql` connection
3. `mails` table / model in `sqlsrv` connection

Edit your migration & model connection if you used different connection.


