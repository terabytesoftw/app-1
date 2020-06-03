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

    'app' => [
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
        'hero.footer.column.right' => 'Right',
        'hero.footer.column.right.options' => ['class' => 'column has-text-right has-text-light'],
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
            'file' => '@runtime/logs/app.log',
            'levels' => [
                LogLevel::EMERGENCY,
                LogLevel::ERROR,
                LogLevel::WARNING,
                LogLevel::INFO,
                LogLevel::DEBUG,
            ],
        ],
        'filerotator' => [
            'maxfilesize' => 10,
            'maxfiles' => 5,
            'filemode' => null,
            'rotatebycopy' => null
        ],
        'session' => [
            'options' => ['cookie_secure' => 0],
            'handler' => null
        ],
    ],

    'yiisoft/yii-debug' => [
        'enabled' => true
    ],
];
