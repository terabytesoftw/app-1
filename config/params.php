<?php

declare(strict_types=1);

return [
    'aliases' => [
        '@root' => dirname(__DIR__),
        '@public' => '@root/public',
        '@images' => '@public/images',
        '@resources' => '@root/resources',
        '@basePath' => '@public/assets',
        '@web' => '/assets',
        '@npm' => '@root/node_modules',
        '@layout' => '@root/resources/layout',
        '@views' => '@root/resources/views',
        '@src' => '@root/src',
    ],

    'debugger.enabled' => true,

    'session' => [
        'options' => ['cookie_secure' => 0],
    ],

    'yii-extension.app.brandurl' => '/',
    'yii-extension.app.charset' => 'UTF-8',
    'yii-extension.app.hero.options' => ['class' => 'hero is-fullheight-with-navbar is-light'],
    'yii-extension.app.hero.body.options' => ['class' => 'hero-body is-light'],
    'yii-extension.app.hero.container.options' => ['class' => 'container has-text-centered'],
    'yii-extension.app.hero.footer.options' => ['class' => 'hero-footer has-background-black'],
    'yii-extension.app.hero.footer.column.options' => ['class' => 'columns'],
    'yii-extension.app.hero.footer.column.left' => 'Left',
    'yii-extension.app.hero.footer.column.left.options' => ['class' => 'column has-text-left has-text-light'],
    'yii-extension.app.hero.footer.column.center' => 'Center',
    'yii-extension.app.hero.footer.column.center.options' => ['class' => 'column has-text-centered has-text-light'],
    'yii-extension.app.hero.footer.column.rigth' => 'Rigth',
    'yii-extension.app.hero.footer.column.rigth.options' => ['class' => 'column has-text-right has-text-light'],
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
    'yii-extension.app.navbar.options' => ['class' => 'is-black', 'data-sticky' => '', 'data-sticky-shadow' => ''],
];
