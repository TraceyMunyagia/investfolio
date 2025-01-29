<?php

namespace App\Livewire;

use App\Models\Investor;
use Livewire\Component;
use Auth;

class PendingApproval extends Component
{

    public $search = '';  

    public $investor=[];

    public function searchInvestors()
    {
        $this->investors = Investor::where('email', 'like', '%' . $this->search . '%')
                                    ->where('status', 'pending_approval') 
                                    ->get();
    }

    public function mount(){
        $this->investor= Investor::all();
    }

    public function deleteinvestor(Investor $investor){
        $investor->delete();
        session()->flash('success','User Deleted Successfully');
        return $this->redirect('/pending/approval',navigate:true);

    }
    public function Approveinvestor(){
        return $this->redirect('/approved/register',navigate:true);
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
