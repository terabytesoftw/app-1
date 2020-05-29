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
        $appModule->heroOptions($params['yii-extension.app.hero.options']);
        $appModule->heroBodyOptions($params['yii-extension.app.hero.body.options']);
        $appModule->heroContainerOptions($params['yii-extension.app.hero.container.options']);
        $appModule->heroFooterOptions($params['yii-extension.app.hero.footer.options']);
        $appModule->heroFooterLeft($params['yii-extension.app.hero.footer.left']);
        $appModule->heroFooterLeftOptions($params['yii-extension.app.hero.footer.left.options']);
        $appModule->heroFooterCenter($params['yii-extension.app.hero.footer.center']);
        $appModule->heroFooterCenterOptions($params['yii-extension.app.hero.footer.center.options']);
        $appModule->heroFooterRigth($params['yii-extension.app.hero.footer.rigth']);
        $appModule->heroFooterRigthOptions($params['yii-extension.app.hero.footer.rigth.options']);
        $appModule->language($params['yii-extension.app.language']);
        $appModule->logo($params['yii-extension.app.logo']);
        $appModule->menu($params['yii-extension.app.menu']);
        $appModule->name($params['yii-extension.app.name']);
        $appModule->navBarColor($params['yii-extension.app.navbar.color']);

        return $appModule;
    },

    /** Router config */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
