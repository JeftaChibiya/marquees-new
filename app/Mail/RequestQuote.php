<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestQuote extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name;
    public $email;
    public $phone_number;
    public $best_time;
    public $event_date;
    public $guests_no;
    public $event_location;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name, $email, $phone_number, $best_time, $event_date, $guests_no, $event_location)
    {        
        $this->full_name = $full_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->best_time = $best_time;
        $this->event_date = $event_date;
        $this->guests_no = $guests_no;
        $this->event_location = $event_location;        
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.quote-request')
                    ->subject('Quote Request:  ' . ucfirst($this->full_name) . ' is waiting for your reply')
                    ->from($this->email);
    }
}
