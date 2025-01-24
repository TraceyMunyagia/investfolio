<?php

namespace App\Livewire;

use App\Models\Approved;
use Livewire\Component;

class DisplayAccount extends Component
{
    public $approved;

    public function mount(Approved $approved){
        $approved = Approved::findOrFail($id);

    }

    public function render()
    {
        return view('livewire.display-account');
    }
}
