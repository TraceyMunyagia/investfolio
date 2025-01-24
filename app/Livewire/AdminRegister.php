<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Admin;
use Hash;

class AdminRegister extends Component
{
    public $name="";
    public $email= "";
    public $password= "";

    public function render()
    {
        return view('livewire.admin-register');
    }

    public function save(){
        $validated = $this->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email|unique:customers|max:255',
            'password'=>'required|min:8|max:255',
            ]);


            Admin::create($validated);
            $this->reset();
            session()->flash('success','Admin Created Successfully');
            return $this->redirect('/admin/login',navigate:true);
    }
}
