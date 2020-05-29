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
    'yii-extension.app.hero.options' => 'is-light',
    'yii-extension.app.hero.body.options' => 'is-light',
    'yii-extension.app.hero.container.options' => 'has-text-centered',
    'yii-extension.app.hero.footer.options' => 'has-background-black',
    'yii-extension.app.hero.footer.left' => 'Left',
    'yii-extension.app.hero.footer.left.options' => 'has-text-left has-text-light',
    'yii-extension.app.hero.footer.center' => 'Center',
    'yii-extension.app.hero.footer.center.options' => 'has-text-centered has-text-light',
    'yii-extension.app.hero.footer.rigth' => 'Rigth',
    'yii-extension.app.hero.footer.rigth.options' => 'has-text-right has-text-light',
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
    'yii-extension.app.navbar.color' => 'is-black',
];
