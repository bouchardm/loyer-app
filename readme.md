# Install

```bash
git clone git@github.com:bouchardm/loyer-app.git
cd loyer-app
composer install
cp .env.example .env
php artisan key:generate
php artisan clear-compiled
php artisan ide-helper:generate
php artisan storage:link
cd laradock
docker-compose up -d  nginx mysql
docker-compose exec workspace bash
php artisan migrate
```