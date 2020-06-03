<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://github.com/yiisoft.png" height="100px">
    </a>
    <h1 align="center">Yii application template</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yii-extension/app/v/stable.png)](https://packagist.org/packages/yii-extension/app)
[![Total Downloads](https://poser.pugx.org/yii-extension/app/downloads.png)](https://packagist.org/packages/yii-extension/app)
[![build](https://github.com/yii-extension/app/workflows/build/badge.svg)](https://github.com/yii-extension/app/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yii-extension/app/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yii-extension/app/?branch=master)
[![codecov](https://codecov.io/gh/yii-extension/app/branch/master/graph/badge.svg)](https://codecov.io/gh/yii-extension/app)

<p align="center">
    <a href="https://github.com/yii-extension/app" target="_blank">
        <img src="docs\images\home.png" >
    </a>
</p>

Yii application template for Yii 3 is best for rapidly creating projects.

### Directory structure

      config/             contains application configurations
      resources/layout    contains layout files for the web application
      resources/view      contains view files for the web application
      src/                application directory
          Asset/          contains assets definition
          Controller/     contains Web controller classes
          Factory/        contains factory classes files for config
          Provider/       contains provider classes for config
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages      
      public/             contains the entry script and Web resources



### Requirements

The minimum requirement by this project template that your Web server supports PHP 7.4.0.


### Installation

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability dev yii-extension/app <your project>
~~~

Now you should be able to access the application through the following URL, assuming `app` is the directory
directly under the `public` root.

### Web application config

`config/params.php:`

```php
<?php

declare(strict_types=1);

use Psr\Log\LogLevel;

return [
    'aliases' => [
        '@root' => dirname(__DIR__),
        '@assets' => '@root/public/assets',
        '@assetsUrl' => '/assets',
        '@npm' => '@root/node_modules',
        '@public' => '@root/public',
        '@resources' => '@root/resources',
        '@runtime' => '@root/runtime',
        '@views' => '@root/resources/views'
    ],

    'yii-extension/app' => [
        'brandurl' => '/',
        'charset' => 'UTF-8',
        'hero.options' => ['class' => 'hero is-fullheight-with-navbar is-light'],
        'hero.body.options' => ['class' => 'hero-body is-light'],
        'hero.container.options' => ['class' => 'container has-text-centered'],
        'hero.footer.options' => ['class' => 'hero-footer has-background-black'],
        'hero.footer.column.options' => ['class' => 'columns is-mobile'],
        'hero.footer.column.left' => 'Left',
        'hero.footer.column.left.options' => ['class' => 'column has-text-left has-text-light'],
        'hero.footer.column.center' => 'Center',
        'hero.footer.column.center.options' => ['class' => 'column has-text-centered has-text-light'],
        'hero.footer.column.rigth' => 'Rigth',
        'hero.footer.column.rigth.options' => ['class' => 'column has-text-right has-text-light'],
        'language' => 'en',
        'logo' => '/images/yii-logo.jpg',
        'menu' => [
            /**
            * Example menu config simple link, dropdown menu.
            *[
            *   'label' => 'Home',
            *   'url' => ['site/index']
            *],
            *[
            *   'label' => 'Dropdown',
            *   'items' => [
            *       ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
            *       ['label' => 'Level 2 - Dropdown A', 'url' => '#'],
            *       '<li class="dropdown-divider"></li>',
            *       '<li style="color:black;list-style-type: none">Dropdown Header</li>',
            *       ['label' => 'Level 3 - Dropdown B', 'url' => '#'],
            *       ['label' => 'Level 4 - Dropdown A', 'url' => '#'],
            *   ],
            *],
            */
        ],
        'name' => 'My Project',
        'navbar.options' => ['class' => 'is-black', 'data-sticky' => '', 'data-sticky-shadow' => ''],
        'logger' => [
            'levels' => [
                LogLevel::EMERGENCY,
                LogLevel::ERROR,
                LogLevel::WARNING,
                LogLevel::INFO,
                LogLevel::DEBUG,
            ],
        ],
        'session' => [
            'options' => ['cookie_secure' => 0],
        ],
    ],

    'yiisoft/yii-debug' => [
        'enabled' => true
    ],
];
```

### Using PHP built-in server

~~~
php -S 127.0.0.1:8080 -t public
~~~

### Wait till it is up, then open the following URL in your browser

~~~
http://localhost:8080
~~~

### Running Codeception tests

~~~
php -S 127.0.0.1:8080 -t public > yii.log 2>&1 &
vendor/bin/codecept run
~~~
