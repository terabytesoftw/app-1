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
    /** CONTAINER DI */
    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },

    /** LAYOUTPARAMETERS */
    LayoutParameters::class => static function () use ($params) {
        $layoutParameters = new LayoutParameters();

        return $layoutParameters
            ->brandUrl($params['yii-extension/app']['brandurl'])
            ->charset($params['yii-extension/app']['charset'])
            ->heroOptions($params['yii-extension/app']['hero.options'])
            ->heroBodyOptions($params['yii-extension/app']['hero.body.options'])
            ->heroContainerOptions($params['yii-extension/app']['hero.container.options'])
            ->heroFooterOptions($params['yii-extension/app']['hero.footer.options'])
            ->heroFooterColumnOptions($params['yii-extension/app']['hero.footer.column.options'])
            ->heroFooterColumnLeft($params['yii-extension/app']['hero.footer.column.left'])
            ->heroFooterColumnLeftOptions($params['yii-extension/app']['hero.footer.column.left.options'])
            ->heroFooterColumnCenter($params['yii-extension/app']['hero.footer.column.center'])
            ->heroFooterColumnCenterOptions($params['yii-extension/app']['hero.footer.column.center.options'])
            ->heroFooterColumnRigth($params['yii-extension/app']['hero.footer.column.rigth'])
            ->heroFooterColumnRigthOptions($params['yii-extension/app']['hero.footer.column.rigth.options'])
            ->language($params['yii-extension/app']['language'])
            ->logo($params['yii-extension/app']['logo'])
            ->name($params['yii-extension/app']['name'])
            ->navBarOptions($params['yii-extension/app']['navbar.options'])
            ->loggerLevels($params['yii-extension/app']['logger']['levels']);
    },

    /** ROUTER */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
