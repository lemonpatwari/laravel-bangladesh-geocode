# Bangladesh Geocode

Division, District, Upazila/Thana and Union data of Bangladesh for Laravel application. Migration and seeders are ready.
Just publish migrations and seeders and then migrate the db and run the seed command.

## Do not hesitate to share your thought, create issue or send pull request.

[![Total Downloads](https://img.shields.io/packagist/dt/lemonpatwari/bangladeshgeocode.svg?style=flat-square)](https://packagist.org/packages/lemonpatwari/bangladeshgeocode)
[![Packagist License](https://poser.pugx.org/lemonpatwari/bangladeshgeocode/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/lemonpatwari/bangladeshgeocode/version.png)](https://packagist.org/packages/lemonpatwari/bangladeshgeocode)



## Laravel Version Compatibility

Laravel  | Package
:---------|:----------
5.5.x    | 0.4.x
5.6.x    | 0.4.x
5.7.x    | 0.4.x
5.8.x    | 0.4.x
6.x.x    | 0.4.x
7.x.x    | 0.4.x
8.x.x    | 0.5.x

## Installation

You can install the package via composer:

```bash
composer require lemonpatwari/bangladeshgeocode
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.


### Laravel without auto-discovery:
```bash
php artisan vendor:publish --provider="lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider"

#If you need to overrride previously published migrationa and seeders
php artisan vendor:publish --provider="lemonpatwari\bangladeshgeocode\BangladeshGeocodeServiceProvider" --force

```

## Publish Migration and seeders

You can publish migration and seeders via single command:


```bash
php artisan geolocation:install
```

You can publish migration and seeders via different command:


```bash
php artisan migrate

composer dump-autoload

php artisan db:seed --class=DivisionSeeder
php artisan db:seed --class=DistrictSeeder
php artisan db:seed --class=ThanaSeeder
php artisan db:seed --class=UnionSeeder
```

## Usage

``` php
use lemonpatwari\bangladeshgeocode\Models\Division;
use lemonpatwari\bangladeshgeocode\Models\District;
use lemonpatwari\bangladeshgeocode\Models\Thana;
use lemonpatwari\bangladeshgeocode\Models\Union;

$divisions = Division::all();
$districts = District::all();
$thanas = Thana::all();
$union = Union::all();

$divisions = Division::with('districts')->get(); // districts hasMany
$districts = District::with('division','thanas')->get(); //division belongsTo and thanas hasMany
$thanas = Thana::with('district','unions')->get(); //district belongsTo and unions hasMany;
$union = Union::all();

$district = District::find(1);
$thanas = $district->thanas;

//Use any Laravel model functions...
```

### Security

If you discover any issues, please email lemonpatwari@gmail.com
/ hello@lemonpatwari.com instead of using the issue tracker.

## Credits

- [Fahim Ahmed](https://github.com/fahim525)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
