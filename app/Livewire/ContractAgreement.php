<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contract;

class ContractAgreement extends Component
{

    public $accountid;
    public $accountno;

    public $start;

    public $end;    

    public $amount;

    public function Store(){
        $validated = $this->validate([
            'accountid'=> 'required|max:255',
            'accountno'=> 'required|max:255',
            'start'=>'required|max:255',
            'end'=>'required|max:255',
            'amount'=> 'required',
            ]);

            Contract::create($validated);
            $this->reset();
            session()->flash('success','Contract Created Successfully');
            return $this->redirect('/investor/dashboard',navigate:true);
    }
    public function render()
    {
        return view('livewire.contract-agreement');
    }
}
