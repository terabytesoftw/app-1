<?php

declare(strict_types=1);

/* @var array $params */

use Psr\Container\ContainerInterface;
use Yiisoft\Aliases\Aliases;

return [
    Aliases::class => [
        '__class' => Aliases::class,
        '__construct()' => [$params['aliases']],
    ],

    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },
];
