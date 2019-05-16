#!/bin/bash

git pull
cp .env.dev.local .env
composer install
php bin/console doctrine:migration:migrate
php bin/console doctrine:fixtures:load
cp .env.prod.local .env
composer install --no-dev -o
php bin/console cache:clear
