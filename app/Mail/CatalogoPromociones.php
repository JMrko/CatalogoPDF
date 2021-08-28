<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CatalogoPromociones extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data ;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('mail.index')
        // ->subject('HELLO WORLD ');
        // return $this->from('smartview@grow-analytics.com', 'SmartView')
        return $this->view('mail.index')
                    ->subject('RECUPERAR CUENTA SMART VIEW')
                    ->with($this->data);
    }
}
