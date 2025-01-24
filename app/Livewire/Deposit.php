<?php

namespace App\Livewire;

use Livewire\Component;

class Deposit extends Component
{
    public $accountno;

    public $pin;
    public $amount;
    public function Deposit(){
        $validated = $this->validate([
            'accountno'=> 'required|max:255',
            'pin'=> 'required|max:4',
            'amount'=>'required|min:50000',
            ]);

            Deposit::create($validated);
            $this->reset();
            session()->flash('success','Deposit Made Successfully');
            return $this->redirect('/pay',navigate:true);




    }
    public function render()
    {
        return view('livewire.deposit');
    }
}
