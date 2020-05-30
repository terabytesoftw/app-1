<?php

declare(strict_types=1);

namespace App;

use Yiisoft\Assets\AssetBundle;

final class LayoutParameters extends AssetBundle
{
    private string $brandUrl;
    private string $charset;
    private array $heroOptions = [];
    private array $heroBodyOptions = [];
    private array $heroContainerOptions = [];
    private array $heroFooterOptions = [];
    private array $heroFooterColumnOptions = [];
    private string $heroFooterColumnCenter;
    private array $heroFooterColumnCenterOptions = [];
    private string $heroFooterColumnLeft;
    private array $heroFooterColumnLeftOptions = [];
    private string $heroFooterColumnRigth;
    private array $heroFooterColumnRigthOptions = [];
    private string $language;
    private string $logo;
    private array $menu = [];
    private string $name;
    private array $navBarOptions = [];

    public function getBrandUrl(): string
    {
        return $this->brandUrl;
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

    public function getHeroOptions(): array
    {
        return $this->heroOptions;
    }

    public function getHeroContainerOptions(): array
    {
        return $this->heroContainerOptions;
    }

    public function getHeroBodyOptions(): array
    {
        return $this->heroBodyOptions;
    }

    public function getHeroFooterOptions(): array
    {
        return $this->heroFooterOptions;
    }

    public function getHeroFooterColumnOptions(): array
    {
        return $this->heroFooterColumnOptions;
    }

    public function getHeroFooterColumnCenter(): string
    {
        return $this->heroFooterColumnCenter;
    }

    public function getHeroFooterColumnCenterOptions(): array
    {
        return $this->heroFooterColumnCenterOptions;
    }

    public function getHeroFooterColumnLeft(): string
    {
        return $this->heroFooterColumnLeft;
    }

    public function getHeroFooterColumnLeftOptions(): array
    {
        return $this->heroFooterColumnLeftOptions;
    }

    public function getHeroFooterColumnRigth(): string
    {
        return $this->heroFooterColumnRigth;
    }

    public function getHeroFooterColumnRigthOptions(): array
    {
        return $this->heroFooterColumnRigthOptions;
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

    public function getNavBarOptions(): array
    {
        return $this->navBarOptions;
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

    public function heroOptions(array $value): void
    {
        $this->heroOptions = $value;
    }

    public function heroContainerOptions(array $value): void
    {
        $this->heroContainerOptions = $value;
    }

    public function heroBodyOptions(array $value): void
    {
        $this->heroBodyOptions = $value;
    }

    public function heroFooterColumnOptions(array $value): void
    {
        $this->heroFooterColumnOptions = $value;
    }

    public function heroFooterColumnCenter(string $value): void
    {
        $this->heroFooterColumnCenter = $value;
    }

    public function heroFooterColumnCenterOptions(array $value): void
    {
        $this->heroFooterColumnCenterOptions = $value;
    }

    public function heroFooterColumnLeft(string $value): void
    {
        $this->heroFooterColumnLeft = $value;
    }

    public function heroFooterColumnLeftOptions(array $value): void
    {
        $this->heroFooterColumnLeftOptions = $value;
    }

    public function heroFooterColumnRigth(string $value): void
    {
        $this->heroFooterColumnRigth = $value;
    }

    public function heroFooterColumnRigthOptions(array $value): void
    {
        $this->heroFooterColumnRigthOptions = $value;
    }

    public function heroFooterOptions(array $value): void
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

    public function navBarOptions(array $value): void
    {
        $this->navBarOptions = $value;
    }

    public function name(string $value): void
    {
        $this->name = $value;
    }
}
