<?php

declare(strict_types=1);

use App\Asset\AppAsset;
use Yiisoft\Html\Html;

$assetManager->register([
    AppAsset::class,
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <?= Html::beginTag('html', ['lang' => $layoutParameters->getLanguage()]) ?>

        <?= $this->render('_head', ['csrf' => $csrf]) ?>

        <?php $this->beginBody() ?>

            <?= Html::beginTag('body') ?>

                <?= $this->render('_menu') ?>

                <?= Html::beginTag(
                    'section',
                    ['class' => 'hero is-fullheight-with-navbar ' . $layoutParameters->getHeroOptions()]
                ) ?>

                    <?= Html::beginTag('div', ['class' => 'hero-body ' . $layoutParameters->getHeroBodyOptions()]) ?>
                        <?= Html::beginTag('div', ['class' => 'container ' . $layoutParameters->getHeroContainerOptions()]) ?>
                            <?= $content ?>
                        <?= Html::endTag('div') ?>
                    <?= Html::endTag('div') ?>

                    <?= Html::beginTag('div', ['class' => 'hero-footer ' . $layoutParameters->getHeroFooterOptions()]) ?>
                        <?= $this->render('_footer') ?>
                    <?= Html::endTag('div') ?>

                <?= Html::endTag('section') ?>

            <?= Html::endTag('body') ?>

        <?php $this->endBody() ?>

    <?= Html::endTag('html') ?>

<?php $this->endPage() ?>
