<?php

declare(strict_types=1);

use App\Provider\CacheProvider;
use App\Provider\EventDispatcherProvider;
use App\Provider\LoggerProvider;
use App\Provider\WebViewProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/cache' => CacheProvider::class,
    'yiisoft/eventdispatcher' => EventDispatcherProvider::class,
    'yiisoft/log' => LoggerProvider::class,
    'yiisoft/view' => WebViewProvider::class,

    ReverseBlockMerge::class => new ReverseBlockMerge()
];
