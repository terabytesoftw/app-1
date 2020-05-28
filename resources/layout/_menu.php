<?php

declare(strict_types=1);

use Yii\Extension\Bulma\Nav;
use Yii\Extension\Bulma\NavBar;
use Yiisoft\Html\Html;

$menuItems = $appModule->getMenu();

?>

<?= NavBar::begin()
    ->brandLabel($appModule->getName())
    ->brandImage($appModule->getLogo())
    ->brandUrl($appModule->getBrandUrl())
    ->assetManager($assetManager)
    ->webView($this)
    ->options(['class' => $appModule->getNavBarColor()])
    ->start();
?>

    <?= Nav::widget()
        ->currentPath($urlGenerator->generate($urlMatcher->getCurrentRoute()->getName()))
        ->items($menuItems)
    ?>

<?= NavBar::end();
