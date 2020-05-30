<?php

declare(strict_types=1);

use App\Widget\PerformanceMetrics;
use Yiisoft\Html\Html;

?>

<?= Html::beginTag('div', ['class' => 'columns']) ?>

    <?= Html::beginTag('div', ['class' => 'column ' . $layoutParameters->getHeroFooterLeftOptions()]) ?>
        <?= $layoutParameters->getHeroFooterLeft() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column ' . $layoutParameters->getHeroFooterCenterOptions()]) ?>
        <?= $layoutParameters->getHeroFooterCenter() ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'column ' . $layoutParameters->getHeroFooterRigthOptions()]) ?>
        <?= $layoutParameters->getHeroFooterRigth() ?>
    <?= Html::endTag('div') ?>

<?= Html::tag('div');
