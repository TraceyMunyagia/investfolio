<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Approved;

class ApprovedRegister extends Component
{

    public $accountid="";

    public $accountno = "";

    public $pin = "";

    public function Store(){
        $validated = $this->validate([
            'accountid'=> 'required|max:255',
            'accountno'=> 'required|max:255',
            'pin'=>'required|max:8',
            ]);

            Approved::create($validated);
            $this->reset();
            session()->flash('success','Account Created Successfully');
            return $this->redirect('/send',navigate:true);
    }
    public function render()
    {
        return view('livewire.approved-register');
    }

}
