<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $string;   

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->string = $text;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('programmer@bouhartsev.top') // Заменить на адрес с доменом сайта
                    ->to(env("ADMIN_EMAIL")) // Сделать рассылку для админов
                    ->with(['text' => $this->string])
                    ->view('mails.comment-mail');
    }
}
