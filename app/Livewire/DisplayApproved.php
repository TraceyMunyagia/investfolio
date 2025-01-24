<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Approved;

class DisplayApproved extends Component
{
    public $approved;

    public function mount(Approved $approved){
        $this->approved=Approved::all();
    }
    
    public function render()
    {
        return view('livewire.display-approved');
    }
}
