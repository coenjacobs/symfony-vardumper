# WordPress Symfony VarDumper
Brings the Symfony VarDumper component to your WordPress installation.

This enables you to use the `dd()` function in your WordPress projects that then uses the [Symfony VarDumper component](http://symfony.com/doc/current/components/var_dumper/introduction.html) (so I don't get fatal errors when trying to use this function in WordPress projects all the time...).

This plugin **requires PHP 5.4** and enforces this via the [WPupdatePHP library](http://www.wpupdatephp.com/).

## Installation
For now, the only available option to install this plugin is to clone or download the repository and then run `composer install` in the downloaded folder. This will install the required dependencies.

This plugin will be available on in the [WordPress plugin directory](https://wordpress.org/plugins/) eventually and that will bring a ready to install plugin.
