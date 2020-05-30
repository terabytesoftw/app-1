<?php

declare(strict_types=1);

use App\LayoutParameters;
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

    LayoutParameters::class => static function () use ($params) {
        $layoutParameters = new LayoutParameters();

        $layoutParameters->brandUrl($params['yii-extension.app.brandurl']);
        $layoutParameters->charset($params['yii-extension.app.charset']);
        $layoutParameters->heroOptions($params['yii-extension.app.hero.options']);
        $layoutParameters->heroBodyOptions($params['yii-extension.app.hero.body.options']);
        $layoutParameters->heroContainerOptions($params['yii-extension.app.hero.container.options']);
        $layoutParameters->heroFooterOptions($params['yii-extension.app.hero.footer.options']);
        $layoutParameters->heroFooterLeft($params['yii-extension.app.hero.footer.left']);
        $layoutParameters->heroFooterLeftOptions($params['yii-extension.app.hero.footer.left.options']);
        $layoutParameters->heroFooterCenter($params['yii-extension.app.hero.footer.center']);
        $layoutParameters->heroFooterCenterOptions($params['yii-extension.app.hero.footer.center.options']);
        $layoutParameters->heroFooterRigth($params['yii-extension.app.hero.footer.rigth']);
        $layoutParameters->heroFooterRigthOptions($params['yii-extension.app.hero.footer.rigth.options']);
        $layoutParameters->language($params['yii-extension.app.language']);
        $layoutParameters->logo($params['yii-extension.app.logo']);
        $layoutParameters->menu($params['yii-extension.app.menu']);
        $layoutParameters->name($params['yii-extension.app.name']);
        $layoutParameters->navBarColor($params['yii-extension.app.navbar.color']);

        return $layoutParameters;
    },

    /** Router config */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
