<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Visitor;

class VisitorContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $visitor;
    public function __construct(Visitor $visitor)
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
                    ->subject('Visitor Comments')
                    -> with([
                        'visitorName' => $this->visitor->name,
                        'visitorEmail' => $this->visitor->email,
                        'visitorMessage' => $this->visitor->message
                    ]);
    }
}
