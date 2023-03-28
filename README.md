# Very simple log list for filament with helpers to use across code.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sevendaysdigital/simple-filament-logs.svg?style=flat-square)](https://packagist.org/packages/sevendaysdigital/simple-filament-logs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sevendaysdigital/simple-filament-logs/run-tests?label=tests)](https://github.com/sevendaysdigital/simple-filament-logs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sevendaysdigital/simple-filament-logs/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sevendaysdigital/simple-filament-logs/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sevendaysdigital/simple-filament-logs.svg?style=flat-square)](https://packagist.org/packages/sevendaysdigital/simple-filament-logs)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require sevendaysdigital/simple-filament-logs
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="simple-filament-logs-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="simple-filament-logs-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="simple-filament-logs-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$simple-filament-logs = new SevendaysDigital\SimpleFilamentLogs();
echo $simple-filament-logs->echoPhrase('Hello, SevendaysDigital!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Harings Rob](https://github.com/Sevendays-Digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
