<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    /**
     * Create a new message instance.
     *
     * @param  array  $data  Form data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[SOMAFIAM] Nouveau message : ' . $this->data['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'name'      => $this->data['name'],
                'email'     => $this->data['email'],
                'societe'   => $this->data['societe'] ?? null,
                'fonction'  => $this->data['fonction'] ?? null,
                'telephone' => $this->data['telephone'] ?? null,
                'country'   => $this->data['country'],
                'ville'     => $this->data['ville'] ?? null,
                'adresse'   => $this->data['adresse'] ?? null,
                'subject'   => $this->data['subject'],
                'message'   => $this->data['message'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}