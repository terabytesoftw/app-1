<?php

declare(strict_types=1);

use App\Factory\AppRouterFactory;
use App\Helper\Parameters;
use App\Helper\Timer;
use Psr\Container\ContainerInterface;
use Yiisoft\Router\FastRoute\UrlGenerator;
use Yiisoft\Router\Group;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Router\UrlMatcherInterface;

$timer = new Timer();
$timer->start('overall');

return [
    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },

    /** Parameters config */
    Parameters::class => static function () use ($params) {
        return new Parameters($params);
    },

    /** Router config */
    RouteCollectorInterface::class => Group::create(),
    UrlMatcherInterface::class => new AppRouterFactory(),
    UrlGeneratorInterface::class => UrlGenerator::class,

    Timer::class => $timer,
];
