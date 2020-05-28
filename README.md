<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="80px">
    </a>
    <h1 align="center">Skeleton Web Application for Yii - Bulma CSS Framework.</h1>
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

DIRECTORY STRUCTURE:
--------------------

      config/             contains application configurations
      resources/layout    contains layout files for the web application
      resources/view      contains view files for the web application
      app/                application directory
          Asset/          contains assets definition
          Controller/     contains Web controller classes
          Factory/        contains factory classes files for config
          Helper/         contains helper classes
          Provider/       contains provider classes for config
          Widget/         contains widget classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages      
      public/             contains the entry script and Web resources



REQUIREMENTS:
-------------

The minimum requirement by this project template that your Web server supports PHP 7.4.0.


INSTALLATION:
-------------

### Install via Composer:

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability dev yii-extension/app <your project>
~~~

Now you should be able to access the application through the following URL, assuming `app` is the directory
directly under the `public` root.

### Run web server build in php:

~~~
php -S 127.0.0.1:8080 -t public
~~~

### Run web application php:

~~~
http://localhost:8080
~~~

### Web application config:

`config/params.php:`

```php
return [
    'yii-extension.app.brandurl' => '/',
    'yii-extension.app.charset' => 'UTF-8',
    'yii-extension.app.footer.color' => 'has-background-black',
    'yii-extension.app.footer.left' => 'Left',
    'yii-extension.app.footer.left.text.color' => 'has-text-light',
    'yii-extension.app.footer.center' => 'Center',
    'yii-extension.app.footer.center.text.color' => 'has-text-light',
    'yii-extension.app.footer.rigth' => 'Rigth',
    'yii-extension.app.footer.rigth.text.color' => 'has-text-light',
    'yii-extension.app.hero.color' => 'is-light',
    'yii-extension.app.language' => 'en',
    'yii-extension.app.logo' => 'images/yii-logo.jpg',
    'yii-extension.app.menu' => [
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
    'yii-extension.app.name' => 'My Project Basic',
    'yii-extension.app.navbar.color' => 'is-black'
];
```

### Run test codeception:

~~~
php -S 127.0.0.1:8080 -t public > yii.log 2>&1 &
vendor/bin/codecept run
~~~
