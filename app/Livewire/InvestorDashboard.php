<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
use Request;

class InvestorDashboard extends Component
{
    public function render()
    {

        return view('livewire.investor-dashboard');
    }

    public function logout(){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect('/approved/login',navigate:true);
    }
}
