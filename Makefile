setup:
	composer install
	npm install
	php artisan migrate

start:
	php artisan serve

version:
	php artisan --version

console:
	php artisan tinker

inspire:
	php artisan inspire

migrate:
	php artisan migrate

migrate-rollback:
	php artisan migrate:rollback
