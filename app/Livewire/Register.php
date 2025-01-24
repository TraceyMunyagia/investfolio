<?php

namespace App\Livewire;


use Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;


class Register extends Component
{   
    use WithFileUploads;
    public $user;
    public $surname;
    public $firstname;
    public $othernames;
    public $email;
    public $phone;
    public $national_id;
    public $kra_pin;


    public function storeUser(){
    $validated = $this->validate([
    'surname' => 'required|max:255',
    'firstname' => 'required|max:255',
    'othernames' => 'nullable|max:255', 
    'email' => 'required|email|unique:users|max:255',
    'phone' => 'required|numeric|digits:10', 
    'national_id' => 'nullable|file|mimes:pdf,jpeg,jpg,png|max:1024', 
    'kra_pin' => 'nullable|file|mimes:pdf,jpeg,jpg,png|max:1024', 
]);

if ($this->national_id){
$this->national_id->store('uploads', 'public');
}

if ($this->kra_pin){
    $validated['kra_pin']=$this->national_id->store('uploads', 'public');
    }

        $user = User::create([
                'surname' => $this->surname,
                'firstname' => $this->firstname,
                'othernames' => $this->othernames,
                'email' => $this->email,
                'phone' => $this->phone,
                'national_id' => $this->national_id ? $this->national_id->store('uploads/national_ids') : null,
                'kra_pin' => $this->kra_pin ? $this->kra_pin->store('uploads/kra_pins') : null, 
        ]);

        Auth::login($user);
        session()->flash('success','Registration Successful');
        return $this->redirect('/waiting',navigate:true);

    }

    public function render()
    {
        return view('livewire.register');
    }

}

