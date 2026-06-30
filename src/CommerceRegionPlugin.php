<?php

namespace JeffersonGoncalves\FilamentCommerce\Region;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Region\Concerns\HasCommerceRegionPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\RegionResource;

class CommerceRegionPlugin implements Plugin
{
    use HasCommerceRegionPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-region';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'region' => RegionResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
