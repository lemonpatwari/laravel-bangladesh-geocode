# Bangladesh Geocode

Division, District, Upazila/Thana and Union data for Laravel applications. Migrations and seeders are included so you can publish them to your app, migrate the database and run the seeders.

Contributions, issues and pull requests are welcome.

[![Total Downloads](https://img.shields.io/packagist/dt/lemonpatwari/bangladeshgeocode.svg?style=flat-square)](https://packagist.org/packages/lemonpatwari/bangladeshgeocode)
[![Packagist License](https://poser.pugx.org/lemonpatwari/bangladeshgeocode/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/lemonpatwari/bangladeshgeocode/version.png)](https://packagist.org/packages/lemonpatwari/bangladeshgeocode)
[![GitHub stars](https://img.shields.io/github/stars/lemonpatwari/laravel-bangladesh-geocode)](https://github.com/lemonpatwari/laravel-bangladesh-geocode/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/lemonpatwari/laravel-bangladesh-geocode)](https://github.com/lemonpatwari/laravel-bangladesh-geocode/network)

Current stable: v3.2


## Requirements

- PHP 8.0+
- Laravel (see compatibility table below)

## Laravel Version Compatibility

| Laravel | Package |
|:--------|:--------|
| 5.5.x | 0.4.x |
| 5.6.x | 0.4.x |
| 5.7.x | 0.4.x |
| 5.8.x | 0.4.x |
| 6.x.x | 0.4.x |
| 7.x.x | 0.4.x |
| 8.x.x | 0.5.x |
| 12.x.x | 3.0.0.x / 3.2 |


## Installation

Install the package with Composer:

```bash
composer require lemonpatwari/bangladeshgeocode
```

The package supports Laravel's package auto-discovery, so you normally don't need to register the service provider manually.

### Manual registration (if you disabled auto-discovery)

Add the provider to your `config/app.php` providers array:

```php
lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider::class,
```

## Publishing migrations & seeders

This package provides migrations and seeders in its `database` folder. There are two publish tags available:

- `lp-bangladesh-geocode-migrations` — publishes migrations
- `lp-bangladesh-geocode-seeders` — publishes seeders

Publish them individually:

```bash
php artisan vendor:publish --provider="lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider" --tag="lp-bangladesh-geocode-migrations"
php artisan vendor:publish --provider="lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider" --tag="lp-bangladesh-geocode-seeders"
```

Or publish both (force to overwrite existing files if needed):

```bash
php artisan vendor:publish --provider="lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider" --force
```

The package also provides a convenience artisan command to publish migrations and seeders in one step:

```bash
php artisan geolocation:install
```

After publishing, run the migrations and seeders:

```bash
php artisan migrate
composer dump-autoload
php artisan db:seed --class=DivisionSeeder
php artisan db:seed --class=DistrictSeeder
php artisan db:seed --class=ThanaSeeder
php artisan db:seed --class=UnionSeeder
```


## Usage

Models are available under the `lemonpatwari\bangladeshgeocode\Models` namespace. Example:

```php
use lemonpatwari\bangladeshgeocode\Models\Division;
use lemonpatwari\bangladeshgeocode\Models\District;
use lemonpatwari\bangladeshgeocode\Models\Thana;
use lemonpatwari\bangladeshgeocode\Models\Union;

$divisions = Division::all();
$districts = District::all();
$thanas = Thana::all();
$unions = Union::all();

// Eager loading relations
$divisions = Division::with('districts')->get(); // Division hasMany District
$districts = District::with('division','thanas')->get(); // District belongsTo Division and hasMany Thana
$thanas = Thana::with('district','unions')->get(); // Thana belongsTo District and hasMany Union

$district = District::find(1);
$thanas = $district->thanas;

// Use any standard Eloquent methods
```


### Model fields

Each model exposes fillable fields (examples):
- Division: `country_id`, `name`, `bn_name`, `status`
- District: `name`, `bn_name`, `lat`, `lon`, `url`, `status`, `division_id`
- Thana: `name`, `bn_name`, `url`, `status`, `district_id`
- Union: `name`, `bn_name`, `url`, `status`, `thana_id`


### Security

If you discover security issues, please email `lemonpatwari@gmail.com` or `hello@lemonpatwari.com` rather than opening a public issue.

## Credits

- [Fahim Ahmed](https://github.com/fahim525)

## License

The MIT License (MIT). See the `LICENSE.md` file for details.
