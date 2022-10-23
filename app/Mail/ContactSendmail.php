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

    private $name1;
    private $name2;
    private $kana1;
    private $kana2;
    private $email;
    private $body;

    public function __construct( $inputs )
    {
        $this->name1 = $inputs['name1'];
        $this->name2 = $inputs['name2'];
        $this->kana1 = $inputs['kana1'];
        $this->kana2 = $inputs['kana2'];
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
                'name1' => $this->name1,
                'name2' => $this->name2,
                'kana1' => $this->kana1,
                'kana2' => $this->kana2,
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
