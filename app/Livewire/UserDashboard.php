<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;

class UserDashboard extends Component
{
    public function render()
    {
        return view('livewire.user-dashboard');
    }

    public function logout(){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect('/approved/login',navigate:true);
    }
}
