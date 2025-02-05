<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class testmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

  
    public function __construct($data)
    {
        $this->data = $data;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('your-email@example.com', 'Your Name'),
            subject: 'Contact Mail'
        );
    }

  
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            
        );
    }



    public function attachments(): array
    {
        return [];
    }
}
