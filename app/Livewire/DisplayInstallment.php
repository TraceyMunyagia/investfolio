<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Installment;

class DisplayInstallment extends Component
{
    public $installment=[];

    public $search='';

    public function mount(){
        $this->installment= Installment::all();
    }
    public function render()
    {
        if(! $this->search){
            $this->installments=Installment::all();
        }else{
            $this->installment=Installment::where('accountno','like','%'.$this->search.'%')->get();
        }
        return view('livewire.display-installment');
    }
}
