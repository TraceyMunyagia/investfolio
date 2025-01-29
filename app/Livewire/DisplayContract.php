<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contract;

class DisplayContract extends Component
{
    public $contract=[];

    public $search='';

    public function mount(){
        $this->contract= Contract::all();
    }
    public function render()
    {
        if(! $this->search){
            $this->contracts=Contract::all();
        }else{
            $this->contract=Contract::where('accountno','like','%'.$this->search.'%')->get();
        }
        return view('livewire.display-contract');
    }
}
