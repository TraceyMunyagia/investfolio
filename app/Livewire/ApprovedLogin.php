<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ApprovedLogin extends Component
{
    public $accountid;
    public $accountno;
    public $pin;
    public function render()
    {
        return view('livewire.approved-login');
    }

    public function loginApproved()
    {
        $validated = $this->validate([
            'accountid'=> 'required|max:255',
            'accountno'=> 'required|max:255',
            'pin'=> 'required|max:8',
        ]);


        if (Auth::attempt([
            'accountid' => $this->accountno,
            'accountno' => $this->accountno,
            'pin' => $this->pin
        ]));
              

        return redirect()->to('/investor/dashboard');  
    

                 }
}
