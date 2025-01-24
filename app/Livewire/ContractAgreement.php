<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contract;


class ContractAgreement extends Component
{
    public $accountno;

    public $start_date; 

    public $end_date;

    public $amount;

    public function submit(){
        $validated = $this->validate([
        'accountno' => 'required|max:255',
        'start_date' => 'required',
        'end_date' => 'required|after_or_equal:start_date',
        'amount'=> 'required|min:1000',
    ]);
    
    
    Contract::create($validated);
    $this->reset();
    session()->flash('success','Contract Created Successfully');
    return $this->redirect('/user/dashboard',navigate:true);

        }
    public function render()
    {
        return view('livewire.contract-agreement');
    }


}
