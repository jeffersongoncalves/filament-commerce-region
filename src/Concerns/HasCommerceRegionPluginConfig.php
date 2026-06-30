<?php

namespace JeffersonGoncalves\FilamentCommerce\Region\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceRegionPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-region';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Configuration';
    }
}
