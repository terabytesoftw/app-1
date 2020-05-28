<?php

declare(strict_types=1);

namespace App;

use Yiisoft\Assets\AssetBundle;

final class AppModule extends AssetBundle
{
    private string $brandUrl;
    private string $charset;
    private string $footerColor;
    private string $footerCenter;
    private string $footerCenterTextColor;
    private string $footerLeft;
    private string $footerLeftTextColor;
    private string $footerRigth;
    private string $footerRigthTextColor;
    private string $heroColor;
    private string $language;
    private string $logo;
    private array $menu = [];
    private string $name;
    private string $navBarColor;

    public function getBrandUrl(): string
    {
        return $this->brandUrl;
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

    public function getFooterColor(): string
    {
        return $this->footerColor;
    }

    public function getFooterCenter(): string
    {
        return $this->footerCenter;
    }

    public function getFooterCenterTextColor(): string
    {
        return $this->footerCenterTextColor;
    }

    public function getFooterLeft(): string
    {
        return $this->footerLeft;
    }

    public function getFooterLeftTextColor(): string
    {
        return $this->footerLeftTextColor;
    }

    public function getFooterRigth(): string
    {
        return $this->footerRigth;
    }

    public function getFooterRigthTextColor(): string
    {
        return $this->footerRigth;
    }

    public function getHeroColor(): string
    {
        return $this->heroColor;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function getMenu(): array
    {
        return $this->menu;
    }

    public function getNavBarColor(): string
    {
        return $this->navBarColor;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function brandUrl(string $value): void
    {
        $this->brandUrl = $value;
    }

    public function charset(string $value): void
    {
        $this->charset = $value;
    }

    public function footerCenter(string $value): void
    {
        $this->footerCenter = $value;
    }

    public function footerCenterTextColor(string $value): void
    {
        $this->footerCenterTextColor = $value;
    }

    public function footerLeft(string $value): void
    {
        $this->footerLeft = $value;
    }

    public function footerLeftTextColor(string $value): void
    {
        $this->footerLeftTextColor = $value;
    }

    public function footerRigth(string $value): void
    {
        $this->footerRigth = $value;
    }

    public function footerRigthTextColor(string $value): void
    {
        $this->footerRigthTextColor = $value;
    }

    public function footerColor(string $value): void
    {
        $this->footerColor = $value;
    }

    public function heroColor(string $value): void
    {
        $this->heroColor = $value;
    }

    public function language(string $value): void
    {
        $this->language = $value;
    }

    public function logo(string $value): void
    {
        $this->logo = $value;
    }

    public function menu(array $value): void
    {
        $this->menu = $value;
    }

    public function navBarColor(string $value): void
    {
        $this->navBarColor = $value;
    }

    public function name(string $value): void
    {
        $this->name = $value;
    }
}
