<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StudentPortalCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $studentNo;
    public $password;

    /**
     * Create a new message instance.
     */
    public function __construct($studentNo, $password)
    {
        $this->studentNo = $studentNo;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Student Portal Credentials',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Student Portal Credentials')
                    ->view('emails.student-portal-credentials')
                    ->with([
                        'studentNo' => $this->studentNo,
                        'password' => $this->password,
                    ]);
    }
}