# huenisys/start

This package guides you in getting your Laravel 5.5 site started

## Installation

- $ ``composer require "huenisys/start"``
- For development, use autoload-dev instead
```
"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/",
        "Huenisys\\Start\\": "../laravel-packages/huenisys/start/src"
    }
},
```
- add provider: ``Huenisys\Start\StartServiceProvider::class,``

## Steps

- Clone the laravel repo. Consider using the provided binary: 
$ ``laravel new l55.site``
- Create per project Homestead:
- $ ``composer require "laravel/homestead"``
- $ ``php vendor/bin/homestead make`` or 
$ ``vendor\\bin\\homestead make``
- Setup the dev machine like what's shown in stub: stubs/Homestead.yaml
- Install composer packages: $ ``composer install``
- Install node modules: $ ``npm install``
- Setup a database: $ ``touch database/database.sqlite``
- Update .env to use DB_CONNECTION=sqlite, delete all other DB entries
- Do a fresh migration: $ ``art migrate:refresh``
- Copy class: StartSeeder: $ ``art vendor:publish --tag=start-seeder``
- Seed it: $ ``art db:seed --class=StartSeeder``

## Notes

- laravel-packages directory is used to ease up package development
- During development, we just do autoload them. Take for example 
huenisys/tpl entry below. All we're doing is using relative paths to keep the package accessible without cluttering the git history
```
"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/",
        "Huenisys\\Tpl\\": "../laravel-packages/huenisys/tpl/src"
    }
},
```