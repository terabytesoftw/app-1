<?php

declare(strict_types=1);

use Yii\Extension\Bulma\Nav;
use Yii\Extension\Bulma\NavBar;
use Yiisoft\Html\Html;

if (isset($user) && $user->getId() !== null) {
    $menuItems[] = [
        'label' => 'Logout' . ' ' . '(' . $user->getIdentity()->username . ')',
        'url' => '/auth/logout'
    ];
} else {
    $menuItems =  $layoutParameters->getMenu();
}

?>

<?= NavBar::begin()
    ->brandLabel($layoutParameters->getName())
    ->brandImage($layoutParameters->getLogo())
    ->brandUrl($layoutParameters->getBrandUrl())
    ->assetManager($assetManager)
    ->webView($this)
    ->options($layoutParameters->getNavBarOptions())
    ->start();
?>

    <?= Nav::widget()
        ->currentPath($urlGenerator->generate($urlMatcher->getCurrentRoute()->getName()))
        ->items($menuItems)
    ?>

<?= NavBar::end();
