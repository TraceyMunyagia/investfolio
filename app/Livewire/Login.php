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

    public function loginUser(Request $request){
        $validated = $this->validate([
            'email'=> 'required|email|max:255',
            'password'=> 'required|min:8|max:255',
        ]);

        if(Auth::attempt($validated)){
            return $this->redirect('/customers', navigate:true);
    }
 
    $this->addError('email','Incorrect password!');
   }
}
