# kalkulator-laravel

## Installation

1. From your projects root folder in terminal run:

```bash
    composer require yudiandela/kalkulator
```

2. Register the package:

Register the package with laravel in `config/app.php` under `providers` with the following:

```php
	'providers' => [
		YudiAndela\Kalkulator\Providers\KalkulatorServiceProvider::class,
	];
```

3. Publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
    php artisan vendor:publish --tag=kalkulator
```

## Routes

* `/kalkulator`
* `/kalkulator/tambah/{a}/{b}`
* `/kalkulator/kurang/{a}/{b}`
* `/kalkulator/bagi/{a}/{b}`
* `/kalkulator/kali/{a}/{b}`
