<?php

use App\Livewire\CreateCustomer;
use App\Livewire\FirstComponent;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CreateCustomer::class)
        ->assertStatus(200);
});
