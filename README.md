Laravel Api Postcode Package
============================

A laravel package for fetching Address details

For more information see: [https://api-postcode](https://api-postcode.nl/)

## Requirements ##

Laravel 5.1 or later


Installation
------------
Installation is a quick 3 step process:

1. Download api-postcode-laravel using composer
2. Enable the package in app.php
3. Configure your Api Postcode credentials

### Step 1: Download api-postcode-laravel using composer

Add api-postcode/api-postcode-laravel by running the command:

```
composer require api-postcode/api-postcode-laravel
```

### Step 2: Enable the package in app.php

Register the Service in: **config/app.php**

``` php
ApiPostcode\ApiPostcodeServiceProvider::class,
````

Optional - Register the Facade in: **config/app.php**

``` php
'aliases' => [
    //...
    'Postcode' => ApiPostcode\Facade\Postcode::class,
];
````

### Step 3: Configure Api Postcode credentials

```
php artisan vendor:publish --provider="ApiPostcode\ApiPostcodeServiceProvider"
```

Add this in you **.env** file

```
API_POSTCODE_TOKEN=secret-token-from-api-postcode
```

Usage
-----

``` php
$address = app('api.postcode')->fetchAddress('1012JS', 1);
	
$address->getStreet();      // Dam
$address->getCity();        // Amsterdam
$address->getHouseNumber(); // 1
$address->getZipCode();     // 1012JS
$address->getLongitude();   // 4.4584
$address->getLatitude();    // 52.2296
````

Or use the Facade:

``` php
$address = Postcode::fetchAddress('1012JS', '1')
````

Or straight in routes:

``` php
$router->get('postcode/{zipCode}/{number}', function ($zipCode, $number) {
    return Postcode::fetchAddress($zipCode, $number);
});
````
