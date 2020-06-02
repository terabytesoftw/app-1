<?php

declare(strict_types=1);

use App\Factory\RouterFactory;
use Psr\Container\ContainerInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Router\Group;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Router\UrlMatcherInterface;
use Yiisoft\Router\FastRoute\UrlGenerator;

return [
    /** ALIASES */
    Aliases::class => [
        '@root' => dirname(__DIR__),
        '@basePath' => '@root/public/assets',
        '@assetsUrl' => '/assets',
        '@npm' => '@root/node_modules',
    ],

    /** CONTAINER DI */
    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },

    /** ROUTER */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new RouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,
];
