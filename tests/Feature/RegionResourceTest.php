<?php

use JeffersonGoncalves\Commerce\Region\Models\Region;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages\CreateRegion;
use JeffersonGoncalves\FilamentCommerce\Region\Resources\Region\Pages\ListRegion;
use Livewire\Livewire;

it('renders the region list page', function () {
    Region::factory()->count(2)->create();

    Livewire::test(ListRegion::class)->assertOk();
});

it('creates a region record through the panel', function () {
    Livewire::test(CreateRegion::class)
        ->fillForm([
            'name' => 'Europe',
            'currency_code' => 'eur',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Region::query()->count())->toBe(1);
});
