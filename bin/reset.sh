#!/bin/bash


# Install the vendor
rm -rf var/cache/*
#composer install

# Clear and update the database
php bin/console doctrine:database:drop --force || true
php bin/console doctrine:database:create

php bin/console doctrine:migrations:migrate 20161022122724 -n
php bin/console doctrine:migrations:migrate 20161023222631 -n
php bin/console doctrine:migrations:migrate 20161212144130 -n
php bin/console doctrine:migrations:migrate 20161212172348 -n
php bin/console doctrine:migrations:migrate 20161213044618 -n
php bin/console doctrine:migrations:migrate 20161213084501 -n
php bin/console doctrine:migrations:migrate 20161213091623 -n
php bin/console doctrine:migrations:migrate 20161213092904 -n
php bin/console doctrine:migrations:migrate 20161213093329 -n
php bin/console doctrine:migrations:migrate 20161213094832 -n
php bin/console doctrine:migrations:migrate 20161213113709 -n

php bin/console doctrine:fixtures:load -n

php bin/console doctrine:migrations:migrate 20161213134202 -n
php bin/console assets:install
