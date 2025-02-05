<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Investment;

class ViewInvestments extends Component
{
    public $investment=[];

    public $search='';

    public function mount(){
        $this->investment= Investment::all();
    }
    public function render()
    {
        if(! $this->search){
            $this->investments=Investment::all();
        }else{
            $this->investment=Investment::where('accountno','like','%'.$this->search.'%')->get();
        }
        return view('livewire.view-investments');
    }
}
