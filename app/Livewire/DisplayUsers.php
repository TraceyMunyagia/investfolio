<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class DisplayUsers extends Component
{
    public $user=[];

    public function mount(){
        $this->user = User::all();
    }
        
    public function render()
    {
        return view('livewire.display-users');
    }
}
