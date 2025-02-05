<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Investment;

class ChooseInvestment extends Component
{
    public $accountno;

    public $type;

    public $company;

    public $period;

    public function Store(){
        $validated = $this->validate([
            'accountno' => 'required|string|max:255',  
            'type' => 'required|string|in:stocks,bonds,exchangetradefunds,moneymarketfunds',            
            'company' => 'required|string|in:safaricom,equitygroup,cbk,kplc,nse,cicassetmanagement,oldmutual',
            'period' => 'required|integer|min:1',      

        ]);
            Investment::create($validated);
            $this->reset();
            session()->flash('success','Investment Created Successfully');
            return $this->redirect('/investor/dashboard',navigate:true);
    }
    public function render()
    {
        return view('livewire.choose-investment');
    }
}
