<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class NewUser extends Component
{
    public $name="";
    public $email= "";
    public $password= "";

    public function render()
    {
        return view('livewire.new-user');
    }

    public function save(){
        $validated = $this->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email|unique:customers|max:255',
            'password'=>'required|min:8|max:255',
            ]);

            User ::create($validated);
            $this->reset();
            return $this->redirect('/login',navigate:true);
    }
}
