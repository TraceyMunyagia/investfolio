<?php

namespace App\Mail;

use Faker\Provider\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $messageContent;


        public function __construct($subject, $messageContent)
    {
        $this->subject = $subject;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject($this->subject)
                    ->view('mail.welcome')
                    ->with([
                        'messageContent' => $this->messageContent
                    ]);
    }
}
