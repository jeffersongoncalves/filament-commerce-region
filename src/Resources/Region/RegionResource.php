<?php

namespace JeffersonGoncalves\FilamentCommerce\Region\Resources\Region;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Region\Models\Region;
use JeffersonGoncalves\FilamentCommerce\Region\CommerceRegionPlugin;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages\CreateRegion;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages\EditRegion;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages\ListRegion;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Schemas\RegionForm;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Tables\RegionTable;

class RegionResource extends Resource
{
    protected static ?string $model = Region::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceRegionPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-region.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return RegionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RegionTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRegion::route('/'),
            'create' => CreateRegion::route('/create'),
            'edit' => EditRegion::route('/{record}/edit'),
        ];
    }
}
