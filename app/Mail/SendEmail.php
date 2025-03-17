<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
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
        if($this->data['survey']['type'] && $this->data['survey']['type']==1)
          return $this->subject('OHX-Ray')->view('value-email',$this->data);
        else{
                    return $this->subject('OHX-Ray')->view('email',$this->data);

        }
    }
}
