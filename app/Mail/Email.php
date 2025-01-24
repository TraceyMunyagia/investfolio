<?php

namespace App\Mail;
 use App\Models\User;
 use App\Models\Approved;
 use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


$user = User::find(1); // Fetch the user
$approved = Approved::find(1); // Fetch the approval details

Mail::to($user->email)->send(new Email($user, $approved));

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    public Approved $approved;


    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Approved $approved)
    {
        $this->user = $user;
        $this->approved = $approved;
    }

    public function build()
    {
        return $this->view('mail.welcome')
            ->with([
                'name' => $this->user->firstname,
                'accountNumber' => $this->approved->accountno,
                'pin' => $this->approved->pin,
            ])
            ->subject('Welcome Email'); // Set a subject for the email
    }

    /**
     * Get the message envelope.
     */

    /**
     * Get the message content definition.
     */
  

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    
}
