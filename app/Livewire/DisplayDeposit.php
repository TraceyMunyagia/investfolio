<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Deposit;

class DisplayDeposit extends Component
{
    public $deposit=[];

    public $search='';


    public function mount(){
        $this->deposit= Deposit::all();
    }
    public function render()
    {
        if(! $this->search){
            $this->deposits=Deposit::all();
        }else{
            $this->deposit=Deposit::where('accountno','like','%'.$this->search.'%')->get();
        }
        return view('livewire.display-deposit');
    }
}
