<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Investor;

class DisplayUsers extends Component
{
    public $investor=[];

    public $search='';

    
    public function mount(){
        $this->investor= Investor::all();
    }
             
    public function render()
    {
       
        return view('livewire.display-users');
    }
}
