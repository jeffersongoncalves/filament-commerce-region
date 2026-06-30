<?php

namespace JeffersonGoncalves\FilamentCommerce\Region;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceRegionServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-region';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
