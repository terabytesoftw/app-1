<?php

declare(strict_types=1);

use Yii\Extension\Bulma\Nav;
use Yii\Extension\Bulma\NavBar;
use Yiisoft\Html\Html;

$menuItems = $params->get('yii-extension.app.menu');

?>

<?= NavBar::begin()
    ->brandLabel($params->get('yii-extension.app.name'))
    ->brandImage($params->get('yii-extension.app.logo'))
    ->brandUrl($params->get('yii-extension.app.brandurl'))
    ->assetManager($assetManager)
    ->webView($this)
    ->start();
?>

    <?= Nav::widget()
        ->currentPath($urlGenerator->generate($urlMatcher->getCurrentRoute()->getName()))
        ->items($menuItems)
    ?>

<?= NavBar::end();
