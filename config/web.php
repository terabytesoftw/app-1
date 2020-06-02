<?php

declare(strict_types=1);

use App\LayoutParameters;
use App\Factory\MiddlewareDispatcherFactory;
use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Yiisoft\Yii\Web\Data\DataResponseFactory;
use Yiisoft\Yii\Web\Data\DataResponseFactoryInterface;
use Yiisoft\Yii\Web\Data\DataResponseFormatterInterface;
use Yiisoft\Yii\Web\Data\Formatter\HtmlDataResponseFormatter;
use Yiisoft\Yii\Web\MiddlewareDispatcher;
use Yiisoft\Yii\Web\Session\Session;
use Yiisoft\Yii\Web\Session\SessionInterface;

return [
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
            ->menu($params['yii-extension/app']['menu'])
            ->loggerLevels($params['yii-extension/app']['logger']['levels']);
    },

    /** PSR-17 */
    RequestFactoryInterface::class => Psr17Factory::class,
    ServerRequestFactoryInterface::class => Psr17Factory::class,
    ResponseFactoryInterface::class => Psr17Factory::class,
    StreamFactoryInterface::class => Psr17Factory::class,
    UriFactoryInterface::class => Psr17Factory::class,
    UploadedFileFactoryInterface::class => Psr17Factory::class,
    DataResponseFormatterInterface::class => HtmlDataResponseFormatter::class,
    DataResponseFactoryInterface::class => DataResponseFactory::class,

    /** MIDDLEWARE */
    MiddlewareDispatcher::class => new MiddlewareDispatcherFactory(),

    /** SESSION */
    SessionInterface::class => [
        '__class' => Session::class,
        '__construct()' => [
            $params['yii-extension/app']['session']['options'] ?? [],
            $params['yii-extension/app']['session']['handler'] ?? null,
        ],
    ],
];
