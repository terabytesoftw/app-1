<?php

declare(strict_types=1);

namespace App;

final class ApplicationParameters
{
    private string $brandUrl = '/';
    private string $charset = 'UTF-8';
    private array $heroOptions = [];
    private array $heroBodyOptions = [];
    private array $heroContainerOptions = [];
    private array $heroFooterOptions = [];
    private array $heroFooterColumnOptions = [];
    private string $heroFooterColumnCenter;
    private array $heroFooterColumnCenterOptions = [];
    private string $heroFooterColumnLeft;
    private array $heroFooterColumnLeftOptions = [];
    private string $heroFooterColumnRight;
    private array $heroFooterColumnRightOptions = [];
    private string $language = 'en';
    private string $logo = '';
    private array $menu = [];
    private string $name = 'My Project';
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

    public function getHeroFooterColumnRight(): string
    {
        return $this->heroFooterColumnRight;
    }

    public function getHeroFooterColumnRightOptions(): array
    {
        return $this->heroFooterColumnRightOptions;
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

    public function brandUrl(string $value): self
    {
        $new = clone $this;
        $new->brandUrl = $value;
        return $new;
    }

    public function charset(string $value): self
    {
        $new = clone $this;
        $new->charset = $value;
        return $new;
    }

    public function heroOptions(array $value): self
    {
        $new = clone $this;
        $new->heroOptions = $value;
        return $new;
    }

    public function heroContainerOptions(array $value): self
    {
        $new = clone $this;
        $new->heroContainerOptions = $value;
        return $new;
    }

    public function heroBodyOptions(array $value): self
    {
        $new = clone $this;
        $new->heroBodyOptions = $value;
        return $new;
    }

    public function heroFooterColumnOptions(array $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnOptions = $value;
        return $new;
    }

    public function heroFooterColumnCenter(string $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnCenter = $value;
        return $new;
    }

    public function heroFooterColumnCenterOptions(array $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnCenterOptions = $value;
        return $new;
    }

    public function heroFooterColumnLeft(string $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnLeft = $value;
        return $new;
    }

    public function heroFooterColumnLeftOptions(array $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnLeftOptions = $value;
        return $new;
    }

    public function heroFooterColumnRight(string $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnRight = $value;
        return $new;
    }

    public function heroFooterColumnRightOptions(array $value): self
    {
        $new = clone $this;
        $new->heroFooterColumnRightOptions = $value;
        return $new;
    }

    public function heroFooterOptions(array $value): self
    {
        $new = clone $this;
        $new->heroFooterOptions = $value;
        return $new;
    }

    public function language(string $value): self
    {
        $new = clone $this;
        $new->language = $value;
        return $new;
    }

    public function logo(string $value): self
    {
        $new = clone $this;
        $new->logo = $value;
        return $new;
    }

    public function menu(array $value): self
    {
        $new = clone $this;
        $new->menu = $value;
        return $new;
    }

    public function navBarOptions(array $value): self
    {
        $new = clone $this;
        $new->navBarOptions = $value;
        return $new;
    }

    public function name(string $value): self
    {
        $new = clone $this;
        $new->name = $value;
        return $new;
    }
}
