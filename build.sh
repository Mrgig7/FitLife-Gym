#!/usr/bin/env bash
# Exit on error
set -e

# Install PHP dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions
chmod -R 777 storage bootstrap/cache

# Clear caches
php artisan optimize:clear

# Create storage symlink
php artisan storage:link

# Run database migrations
php artisan migrate --force

# Generate app key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate
fi

# Install NPM dependencies and build assets
npm install
npm run build 