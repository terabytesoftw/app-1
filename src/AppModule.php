<?php

declare(strict_types=1);

namespace App;

use Yiisoft\Assets\AssetBundle;

final class AppModule extends AssetBundle
{
    private string $brandUrl;
    private string $charset;
    private string $heroOptions;
    private string $heroBodyOptions;
    private string $heroContainerOptions;
    private string $heroFooterOptions;
    private string $heroFooterCenter;
    private string $heroFooterCenterOptions;
    private string $heroFooterLeft;
    private string $heroFooterLeftOptions;
    private string $heroFooterRigth;
    private string $heroFooterRigthOptions;
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

    public function getHeroOptions(): string
    {
        return $this->heroOptions;
    }

    public function getHeroContainerOptions(): string
    {
        return $this->heroContainerOptions;
    }

    public function getHeroBodyOptions(): string
    {
        return $this->heroBodyOptions;
    }

    public function getHeroFooterOptions(): string
    {
        return $this->heroFooterOptions;
    }

    public function getHeroFooterCenter(): string
    {
        return $this->heroFooterCenter;
    }

    public function getHeroFooterCenterOptions(): string
    {
        return $this->heroFooterCenterOptions;
    }

    public function getHeroFooterLeft(): string
    {
        return $this->heroFooterLeft;
    }

    public function getHeroFooterLeftOptions(): string
    {
        return $this->heroFooterLeftOptions;
    }

    public function getHeroFooterRigth(): string
    {
        return $this->heroFooterRigth;
    }

    public function getHeroFooterRigthOptions(): string
    {
        return $this->heroFooterRigthOptions;
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

    public function heroOptions(string $value): void
    {
        $this->heroOptions = $value;
    }

    public function heroContainerOptions(string $value): void
    {
        $this->heroContainerOptions = $value;
    }

    public function heroBodyOptions(string $value): void
    {
        $this->heroBodyOptions = $value;
    }

    public function heroFooterCenter(string $value): void
    {
        $this->heroFooterCenter = $value;
    }

    public function heroFooterCenterOptions(string $value): void
    {
        $this->heroFooterCenterOptions = $value;
    }

    public function heroFooterLeft(string $value): void
    {
        $this->heroFooterLeft = $value;
    }

    public function heroFooterLeftOptions(string $value): void
    {
        $this->heroFooterLeftOptions = $value;
    }

    public function heroFooterRigth(string $value): void
    {
        $this->heroFooterRigth = $value;
    }

    public function heroFooterRigthOptions(string $value): void
    {
        $this->heroFooterRigthOptions = $value;
    }

    public function heroFooterOptions(string $value): void
    {
        $this->heroFooterOptions = $value;
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
