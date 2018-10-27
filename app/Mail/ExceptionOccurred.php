<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionOccurred extends Mailable
{
    use Queueable, SerializesModels;

    public $exception;

    /**
     * Create a new message instance.
     *
     * @param \Exception $exception
     */
    public function __construct(\Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Excepção - benfica.live')
            ->markdown('emails.exception-occurred-admin');
    }
}
