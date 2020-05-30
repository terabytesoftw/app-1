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
        $layoutParameters->heroFooterColumnOptions($params['yii-extension.app.hero.footer.column.options']);
        $layoutParameters->heroFooterColumnLeft($params['yii-extension.app.hero.footer.column.left']);
        $layoutParameters->heroFooterColumnLeftOptions($params['yii-extension.app.hero.footer.column.left.options']);
        $layoutParameters->heroFooterColumnCenter($params['yii-extension.app.hero.footer.column.center']);
        $layoutParameters->heroFooterColumnCenterOptions(
            $params['yii-extension.app.hero.footer.column.center.options']
        );
        $layoutParameters->heroFooterColumnRigth($params['yii-extension.app.hero.footer.column.rigth']);
        $layoutParameters->heroFooterColumnRigthOptions($params['yii-extension.app.hero.footer.column.rigth.options']);
        $layoutParameters->language($params['yii-extension.app.language']);
        $layoutParameters->logo($params['yii-extension.app.logo']);
        $layoutParameters->menu($params['yii-extension.app.menu']);
        $layoutParameters->name($params['yii-extension.app.name']);
        $layoutParameters->navBarOptions($params['yii-extension.app.navbar.options']);

        return $layoutParameters;
    },

    /** Router config */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
