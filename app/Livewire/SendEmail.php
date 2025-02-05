<?php

namespace App\Livewire;
 
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\Email;

class SendEmail extends Component
{
    public function sendEmail()
    {
       Mail::to('fake@email.com')->send(new Email('subject', 'message'));
    }

    public function render()
    {
        return view('livewire.send-email', ['investors' => $this->investors]);
    }
}
