<?php

declare(strict_types=1);

use App\AppModule;
use App\Factory\AppRouterFactory;
use Psr\Container\ContainerInterface;
use Yiisoft\Router\FastRoute\UrlGenerator;
use Yiisoft\Router\Group;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Router\UrlMatcherInterface;

return [
    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },

    AppModule::class => static function () use ($params) {
        $appModule = new AppModule();

        $appModule->brandUrl($params['yii-extension.app.brandurl']);
        $appModule->charset($params['yii-extension.app.charset']);
        $appModule->footerColor($params['yii-extension.app.footer.color']);
        $appModule->footerLeft($params['yii-extension.app.footer.left']);
        $appModule->footerLeftTextColor($params['yii-extension.app.footer.left.text.color']);
        $appModule->footerCenter($params['yii-extension.app.footer.center']);
        $appModule->footerCenterTextColor($params['yii-extension.app.footer.center.text.color']);
        $appModule->footerRigth($params['yii-extension.app.footer.rigth']);
        $appModule->footerRigthTextColor($params['yii-extension.app.footer.rigth.text.color']);
        $appModule->language($params['yii-extension.app.language']);
        $appModule->logo($params['yii-extension.app.logo']);
        $appModule->menu($params['yii-extension.app.menu']);
        $appModule->name($params['yii-extension.app.name']);
        $appModule->navBarColor($params['yii-extension.app.navbar.color']);
        $appModule->heroColor($params['yii-extension.app.hero.color']);

        return $appModule;
    },

    /** Router config */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
