<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Deposit;

class MakeDeposit extends Component
{

    public $accountid;
    public $accountno;

    public $amount;
    public function makeDeposit(){
        $validated = $this->validate([
            'accountid'=> 'required|max:255',
            'accountno'=> 'required|max:255',
            'amount'=>'required',
            ]);

            Deposit::create($validated);
            $this->reset();
            session()->flash('success','Deposit Made Successfully');
            return $this->redirect('/investor/dashboard',navigate:true);

    }
    public function render()
    {
        return view('livewire.make-deposit');
    }
}
