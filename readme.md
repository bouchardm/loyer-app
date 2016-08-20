# Install

```bash
git clone git@github.com:bouchardm/loyer-app.git
cd loyer-app
composer install
cp .env.example .env
php artisan key:generate
cd laradock
docker-compose up -d  nginx mysql
docker-compose exec workspace bash
php artisan migrate
```