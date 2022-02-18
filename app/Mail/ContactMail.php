<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $text_message;
    public $emailFrom;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailFrom, $name, $text_message)
    {
        $this->text_message = $text_message;
        $this->emailFrom = $emailFrom;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = 'noreply@hoffet.net';
        $subject = 'Kontaktskjema - Salong Lykkeliten';
        $name = $this->name;
        $text_message = $this->text_message;
        $emailFrom = $this->emailFrom;

        return $this->view('emails.contact')
                    ->from($address, $name)
                    ->replyTo('vepers@online.no', 'Veronica Persen')
                    ->bcc('andrine@hoffet.net', 'Andrine Persen')
                    ->subject($subject)
                    ->with([
                        'text_message' => $text_message,
                        'name' => $name,
                        'emailFrom' => $emailFrom
                    ]);
    }
}
