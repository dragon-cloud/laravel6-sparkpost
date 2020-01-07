# SparkPost Driver for Laravel 6

As of Laravel 6.0, Laravel has
[discontinued support for SparkPost](https://laravel.com/docs/6.0/upgrade)
and they suggest using a "community-maintained" driver for it instead. This
version is designed to be a drop-in replacement for SparkPost on Laravel 6.X
so that you may
[configure it just like in Laravel 5.X](https://laravel.com/docs/5.8/mail#driver-prerequisites).

## Installation

You can install the package via composer:

```
composer require dragon-cloud/laravel6-sparkpost
```
Now, [configure it just like in Laravel 5.X](https://laravel.com/docs/5.8/mail#driver-prerequisites).

## Contributing

If you find any issues with this code, please create an issue on this repo.
Please note that the starting code in this repository for the driver, is/was
the [same code as Laravel 5.8](https://github.com/laravel/framework/blob/5.8/src/Illuminate/Mail/Transport/SparkPostTransport.php).

PRs will get much faster attention than issues, so remember to create a
Pull Request for any changes!

## Thanks

* Special thanks to the Laravel team for creating the original transport driver for SparkPost!
* Special thanks to [@eldor](https://github.com/eldor) for making it easier to implement the transport. He created [vemcogroup/laravel-sparkpost-driver](https://github.com/vemcogroup/laravel-sparkpost-driver)
