#!/bin/sh
set -e

cd /var/www/html

[ -f .env ] || cp .env.example .env

# Generate APP_KEY once (persisted in .env inside the container)
if ! grep -q '^APP_KEY=base64:' .env; then
    php artisan key:generate --force
fi

echo "Waiting for MySQL at ${DB_HOST}:${DB_PORT}..."
until php -r 'new PDO("mysql:host=".getenv("DB_HOST").";port=".getenv("DB_PORT"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));' 2>/dev/null; do
    sleep 2
done

php artisan migrate --force
# Seed the central DB only on first run
if [ "$(php artisan tinker --execute='echo \App\Models\User::count();' 2>/dev/null | tail -1)" = "0" ]; then
    php artisan db:seed --force
fi

php artisan storage:link 2>/dev/null || true
chown -R www-data:www-data storage bootstrap/cache

exec "$@"
