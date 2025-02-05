<?php

namespace App\Livewire;

use App\Models\Investor;
use Livewire\Component;
use Auth;

class PendingApproval extends Component
{

    public $search = '';  


    public $investor=[];


    public function mount(){
        $this->investor= Investor::all();
    }


    public function deleteinvestor(Investor $investor){
        $investor->delete();
        session()->flash('success','User Deleted Successfully');
        return $this->redirect('/pending/approval',navigate:true);

    }
    public function Approveinvestor(Investor $investor){
        $investor->status = 0;
        $investor->save();
        $investor->delete();
        session()->flash('success','User Approved and Deleted from Pending List Successfully');
        return $this->redirect('/approved/register', navigate:true);
    }

    public function render()
    {
        if(! $this->search){
            $this->investors=Investor::all();
        }else{
            $this->investor=Investor::where('surname','like','%'.$this->search.'%')->get();
        }
        if (!Auth::user()->is_admin) {
            return response('Unauthorized.',401);
    
        }

        return view('livewire.pending-approval');
    }
}
