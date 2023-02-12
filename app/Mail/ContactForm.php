<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $phone;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone,$message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Contact Form',
        );
    }

//    /**
//     * Get the message content definition.
//     *
//     * @return \Illuminate\Mail\Mailables\Content
//     */
//    public function content()
//    {
//        return new Content(
//            view: 'emails.contactForm',
//        );
//    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->subject("Обратная связь")->view('emails.contactForm')
            ->with([
                'username' => $this->name,
                'usermessage' => $this->message,
                'userphone' => $this->phone
            ]);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
