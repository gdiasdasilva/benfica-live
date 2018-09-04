<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Spot;

class SpotSubmitted extends Mailable
{
    use Queueable, SerializesModels;
    public $spotSubmitted;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Spot $spotSubmitted)
    {
        $this->spotSubmitted = $spotSubmitted;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('no-reply@benfica.live', 'No Reply')
            ->subject('Nova submissão de Spot - benfica.live')
            ->markdown('emails.spot-submitted-admin');
    }
}
