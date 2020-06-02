<?php

declare(strict_types=1);

namespace App\Asset;

use Yii\Extension\Bulma\Asset\BulmaAsset;
use Yiisoft\Assets\AssetBundle;

final class AppAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = __DIR__ . '/css';

    public array $css = [
        'site.css'
    ];

    public array $depends = [
        BulmaAsset::class
    ];
}
