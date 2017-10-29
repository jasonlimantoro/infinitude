<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VisitorContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.visitor')
                    ->from($this->visitor['email'])
                    ->subject('Visitor Comments')
                    -> with([
                        'visitorName' => $this->visitor['name'],
                        'visitorMessage' => $this->visitor['message']
                    ]);
    }
}
