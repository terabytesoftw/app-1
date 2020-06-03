<?php

declare(strict_types=1);

/**
 * @var \App\ApplicationParameters $applicationParameters
 */

use Yiisoft\Html\Html;

?>

<?= Html::beginTag('div', $applicationParameters->getHeroFooterColumnOptions()) ?>

    <?= Html::beginTag('div', $applicationParameters->getHeroFooterColumnLeftOptions()) ?>
        <?= $applicationParameters->getHeroFooterColumnLeft() ?>
    <?= Html::endTag('div') ?>

    <?= Html::beginTag('div', $applicationParameters->getHeroFooterColumnCenterOptions()) ?>
        <?= $applicationParameters->getHeroFooterColumnCenter() ?>
    <?= Html::endTag('div') ?>

    <?= Html::beginTag('div', $applicationParameters->getHeroFooterColumnRightOptions()) ?>
        <?= $applicationParameters->getHeroFooterColumnRight() ?>
    <?= Html::endTag('div') ?>

<?= Html::tag('div');
