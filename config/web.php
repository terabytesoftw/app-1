<?php

declare(strict_types=1);

/* @var array $params */

use App\ApplicationParameters;

return [
    ApplicationParameters::class => static function () use ($params) {
        $applicationParameters = new ApplicationParameters();

        return $applicationParameters
            ->brandUrl($params['app']['brandurl'])
            ->charset($params['app']['charset'])
            ->heroOptions($params['app']['hero.options'])
            ->heroBodyOptions($params['app']['hero.body.options'])
            ->heroContainerOptions($params['app']['hero.container.options'])
            ->heroFooterOptions($params['app']['hero.footer.options'])
            ->heroFooterColumnOptions($params['app']['hero.footer.column.options'])
            ->heroFooterColumnLeft($params['app']['hero.footer.column.left'])
            ->heroFooterColumnLeftOptions($params['app']['hero.footer.column.left.options'])
            ->heroFooterColumnCenter($params['app']['hero.footer.column.center'])
            ->heroFooterColumnCenterOptions($params['app']['hero.footer.column.center.options'])
            ->heroFooterColumnRight($params['app']['hero.footer.column.right'])
            ->heroFooterColumnRightOptions($params['app']['hero.footer.column.right.options'])
            ->language($params['app']['language'])
            ->logo($params['app']['logo'])
            ->name($params['app']['name'])
            ->navBarOptions($params['app']['navbar.options'])
            ->menu($params['app']['menu']);
    },
];
