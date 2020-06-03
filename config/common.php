<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Yiisoft\Aliases\Aliases;

/** @var array $params */

return [
    Aliases::class => [
        '__class' => Aliases::class,
        '__construct()' => [$params['aliases']],
    ],

    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },
];
