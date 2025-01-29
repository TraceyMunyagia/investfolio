<?php

namespace App\Livewire;

use Livewire\Component;
use Request;
use Auth;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }

    public function loginUser(){
        $validated = $this->validate([
            'email'=> 'required|email|max:255',
            'password'=> 'required|min:8|max:255',
        ]);


        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
             $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->to('/admin/dashboard');
            }else {
                return redirect()->to('/register');
            }
        };
    }
}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

