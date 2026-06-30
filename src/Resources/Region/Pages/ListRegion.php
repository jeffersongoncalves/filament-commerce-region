<?php

namespace JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\RegionResource;

class ListRegion extends ListRecords
{
    protected static string $resource = RegionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
