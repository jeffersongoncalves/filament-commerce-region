<?php

namespace JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class RegionForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('currency_code'),
                    ])->columns(2),
            ]);
    }
}
