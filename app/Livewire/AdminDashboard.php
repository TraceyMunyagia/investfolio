<?php

namespace App\Livewire;

use Auth;
use Request;
use Livewire\Component;

class AdminDashboard extends Component
{
    
    public function render()
    {
        
    if (!Auth::user()->is_admin) {
        return response('Unauthorized.',401);

    };
        return view('livewire.admin-dashboard');
    }

    public function logout(){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect('/login',navigate:true);
    }
    
}
