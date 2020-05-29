<?php

declare(strict_types=1);

use App\Widget\PerformanceMetrics;
use Yiisoft\Html\Html;

?>

<?= Html::beginTag('div', ['class' => 'columns']) ?>

    <?= Html::beginTag('div', ['class' => 'column ' . $appModule->getHeroFooterLeftOptions()]) ?>
        <?= $appModule->getHeroFooterLeft() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column ' . $appModule->getHeroFooterCenterOptions()]) ?>
        <?= $appModule->getHeroFooterCenter() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column ' . $appModule->getHeroFooterRigthOptions()]) ?>
        <?= $appModule->getHeroFooterRigth() ?>
    <?= Html::endTag('div') ?>

<?= Html::tag('div');
