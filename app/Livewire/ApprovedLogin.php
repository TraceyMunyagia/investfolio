<?php

namespace App\Livewire;

use Livewire\Component;
use Request;
use Auth;

class ApprovedLogin extends Component
{
    public $accountno;
    public $pin;
    public function render()
    {
        return view('livewire.approved-login');
    }

    public function loginApproved()
    {
        $validated = $this->validate([
            'accountno'=> 'required|email|max:255',
            'pin'=> 'required|max:8',
        ]);

        if(Auth::attempt([
            'accountno' => $this->accountno,
            'pin' => $this->pin
             ]));
              
             return redirect()->to('/user/dashboard'); 
    

   }
}
