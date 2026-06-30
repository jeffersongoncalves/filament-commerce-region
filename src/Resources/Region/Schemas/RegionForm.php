<?php

namespace JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RegionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('currency_code'),
                    ])->columns(2),
            ]);
    }
}
