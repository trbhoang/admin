## Simple Administrator Package for Laravel 4+

### Server Requirements

- PHP 5.4 or higher

### Installation

Open your composer.json file, and add the new required package.
```
"pingpong/admin": "dev-master" 
```
Next, open a terminal and run.
```
composer update 
```

Next, Add new service provider in `app/config/app.php`.

```php
    'Pingpong\Menus\MenusServiceProvider',
    'Pingpong\Trusty\TrustyServiceProvider',
    'Pingpong\Admin\AdminServiceProvider',
```

Next, Add new aliases in `app/config/app.php`.

```php
    'Menu'				=> 'Pingpong\Menus\Facades\Menu',
    'Role'			    => 'Pingpong\Trusty\Entities\Role',
    'Permission'	    => 'Pingpong\Trusty\Entities\Permission',
    'Trusty'	    	=> 'Pingpong\Trusty\Facades\Trusty',
```

Next, install the package.
```
php artisan migrate admin:install
```

Done.

### Screenshot

[![Build Status](https://photos-5.dropbox.com/t/0/AAByRnUhhKoHkXeQsRIWK7WuAWSoU9tzrL8exiddZFSOVA/12/194732116/png/1024x768/3/1404982800/0/2/pingpong-admin-shot.png/T2KXwZrUInP7puy0oZloUE-x0OW45psQ_NETUcxy5x0)](https://www.dropbox.com/s/p5eaocivrb3t77h/pingpong-admin-shot.png)

### Usage

Browse your app to the url : `http://your-host.com/admin`.

### License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).