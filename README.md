Font Awesome helper for Yii2
============================

[Font Awesome](http://fortawesome.github.io/Font-Awesome/) helper for Yii2.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "soju/yii2-font-awesome" "*"
```

or add

```json
"soju/yii2-font-awesome" : "*"
```

to the require section of your application's `composer.json` file.

Assets
------
To include Font Awesome assets, you should register it in view :

```php
\soju\yii2fontawesome\FontAwesomeAsset::register($this);
```

Or as dependency in your app asset bundle :

```php
public $depends = [
    'soju\yii2fontawesome\FontAwesomeAsset',
];
```

Usage
-----

```php
use soju\yii2fontawesome\FontAwesome;

// home icon : <i class="fa fa-home"></i>
echo FontAwesome::icon('home');

// 2x home icon : <i class="fa fa-home fa-2x"></i>
echo FontAwesome::icon('home 2x');

```
