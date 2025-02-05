<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Approved;

class ChangePin extends Component
{
    public $approved;
    public $accountno;

    public $pin;

    public function mount(Approved $approved){
        $this->approved = $approved;
        $this->accountno = $approved->accountno;
        $this->pin = $approved->pin;
    }  
    public function updatePin(){
        $validated = $this->validate([
            'accountno'=> 'required|max:255',
            'pin'=> 'required|max:4',
            ]);

            $this->approved->update( $validated);
            session()->flash('success','Pin changed Successfully');
            return $this->redirect('/approved/login',navigate:true);
        }
    public function render()
    {
        return view('livewire.change-pin');
    }
}
