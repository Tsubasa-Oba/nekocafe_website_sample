<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $last_name;
    private $first_name;
    private $last_name_kana;
    private $first_name_kana;
    private $email;
    private $body;

    public function __construct( $inputs )
    {
        $this->last_name = $inputs['last_name'];
        $this->first_name = $inputs['first_name'];
        $this->last_name_kana = $inputs['last_name_kana'];
        $this->first_name_kana = $inputs['first_name_kana'];
        $this->email = $inputs['email'];
        $this->body = $inputs['body'];


    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'お問い合わせ内容　送信完了メール（自動送信）',
        );
    }

    /**
     * Get the body content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        
        return new Content(
            view: 'nekocafe.mail',
            with: [
                'last_name' => $this->last_name,
                'first_name' => $this->first_name,
                'last_name_kana' => $this->last_name_kana,
                'first_name_kana' => $this->first_name_kana,
                'email' => $this->email, 
                'body' => $this->body
            ],
        );
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
