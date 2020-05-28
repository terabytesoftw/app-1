<?php

declare(strict_types=1);

use App\Widget\PerformanceMetrics;
use Yiisoft\Html\Html;

?>

<?= Html::beginTag('div', ['class' => 'columns']) ?>

    <?= Html::beginTag('div', ['class' => 'column has-text-left ' . $appModule->getFooterLeftTextColor()]) ?>
        <?= $appModule->getFooterLeft() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column has-text-centered ' . $appModule->getFooterCenterTextColor()]) ?>
        <?= $appModule->getFooterCenter() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column has-text-right  ' . $appModule->getFooterCenterTextColor()]) ?>
        <?= $appModule->getFooterRigth() ?>
    <?= Html::endTag('div') ?>

<?= Html::tag('div');
