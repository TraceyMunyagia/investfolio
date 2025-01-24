<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.adminlogin');
    }

    public function loginAdmin()
    {
       
        $validated = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        
        if (Auth::attempt([
            'email' => $this->email, 
            'password' => $this->password
        ]));
            
        
            return redirect()->to('/admin/dashboard'); 
        

            }
}
