<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Installment;

class MakeInstallment extends Component
{
    public $accountid;
    public $accountno;

    public $amount;

    public $month;
    public function Makeinstallment(){
        $validated = $this->validate([
            'accountid'=>'required|max:255',
            'accountno'=> 'required|max:255',
            'amount'=>'required',
            'month'=>'required|max:255',
            ]);

            Installment::create($validated);
            $this->reset();
            session()->flash('success','Deposit Made Successfully');
            return $this->redirect('/investor/dashboard',navigate:true);

    }

    public function render()
    {
        return view('livewire.make-installment');
    }
}
