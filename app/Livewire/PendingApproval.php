<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class PendingApproval extends Component
{

    public $user=[];

    public function mount(){
        $this->user = User::all();
    }

    public function deleteuser(User $user){
        $user->delete();
        session()->flash('success','User Deleted Successfully');
        return $this->redirect('/pending/approval',navigate:true);

    }
    public function Approveuser(){
        return $this->redirect('/approved/register',navigate:true);
    }
    public function render()
    {
        return view('livewire.pending-approval');
    }
}
