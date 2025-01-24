<?php

namespace App\Livewire;

use Auth;
use Request;
use Livewire\Component;

class AdminDashboard extends Component
{
    
    public function render()
    {
        return view('livewire.admin-dashboard');
    }

    public function logout(){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect('/admin/login',navigate:true);
    }
    
}
