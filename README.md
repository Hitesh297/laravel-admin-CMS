## Steps to run
1. Create .env file and update DB details (make sure you have mysql server running on your system). You can use tools like MAMP or XAMP to create mysql server.
2. Run below command to install required packages
```
composer install
```
3. Run below command to create tables and seed data
```
php artisan migrate:refresh --seed
```
4. Run below command to start the server
```
php artisan serve
```

## Hosting
Live site at [http://shielded-river-60872.herokuapp.com/](http://shielded-river-60872.herokuapp.com/)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
