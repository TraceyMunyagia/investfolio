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
        if(! $this->search){
            $this->investors=Investor::all();
        }else{
            $this->investor=Investor::where('surname','like','%'.$this->search.'%')->get();
        }
        return view('livewire.display-users');
    }
}
