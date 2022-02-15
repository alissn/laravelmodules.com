# Creating a module

Creating a module is simple and straightforward. Run the following command to create a module.

```bash
php artisan module:make <module-name>
```

Replace `<module-name>` by your desired name.

It is also possible to create multiple modules in one command.

```bash
php artisan module:make Blog User Auth
```

By default when you create a new module, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add `--plain` flag, to generate a plain module.

```bash
php artisan module:make Blog --plain
# or
php artisan module:make Blog -p
```

## Naming convention

Because we are autoloading the modules using [psr-4](http://www.php-fig.org/psr/psr-4/), we strongly recommend using StudlyCase convention.

## Folder structure

```
Modules/
  ├── Blog/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── factories/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
      ├── Providers/
          ├── PostsServiceProvider.php
          ├── RouteServiceProvider.php
      ├── Resources/
          ├── assets/
          ├── lang/
          ├── views/
      ├── Routes/
          ├── api.php
          ├── web.php
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── package.json
      ├── webpack.mix.js
```

## Composer.json

Each module has its own composer.json file, this sets the name of the module, its description and author. You normally only need to change this file if you need to change the vendor name or have its own composer dependencies. 

For instance say you wanted to install a package into this module: 

```php
"require": {
    "dcblogdev/laravel-box": "^2.0"
}
```

This would require the package for this module, but it won't be loaded for the main Laravel composer.json file. For that you would have to put the dependency in the Laravel composer.json file. The main reason this exists is for when extracting a module to a package.

## Module.json

This file details the name alias and description / options:

```php
{
    "name": "Blog",
    "alias": "blog",
    "description": "",
    "keywords": [],
    "priority": 0,
    "providers": [
        "Modules\\Blog\\Providers\\BlogServiceProvider"
    ],
    "aliases": {},
    "files": [],
    "requires": []
}
```

Modules are loaded in the priority order, change the priority number to have modules booted / seeded in a custom order.

The files option can be used to include files:

```php
"files": [
  "start.php"
]
```

