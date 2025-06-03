Yii2 Flat Theme
===============

Theme for Yii2 Web Application for yii2.0

Fully based on [Bootstrap Flat](https://scottdorman.github.io/bootstrap-flat/) - v3.3.4

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```php
php composer.phar require --prefer-dist squio/yii2-theme-bootstrapflat "*"
```

or add

```php
"squio/yii2-theme-bootstrapflat": "*"
```

to the require section of your `composer.json` file.

Usage
-----

```php
use squio\theme\bootstrapflat;

bootstrapflat\BootstrapflatAsset::register($this);
```

Building
--------

Minify the original CSS file using the commands:

```sh
node install
node run build
```
