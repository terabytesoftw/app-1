<?php

declare(strict_types=1);

use App\Widget\PerformanceMetrics;
use Yiisoft\Html\Html;

?>

<?= Html::beginTag('div', ['class' => 'columns']) ?>

    <?= Html::beginTag('div', ['class' => 'column has-text-left', 'style' => 'color: black']) ?>
        <?= PerformanceMetrics::widget() ?>
    <?= Html::endTag('div') ?>

    <?= Html::beginTag('div', ['class' => 'column has-text-right']) ?>
        <a href="https://yiiframework.com"><strong>Copyright © 2020. YiiFramework</a>
    <?= Html::endTag('div') ?>

<?= Html::tag('div');
