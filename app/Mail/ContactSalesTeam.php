<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactSalesTeam extends Mailable
{
    use Queueable, SerializesModels;
   
    public $full_name;
    public $email;    
    public $msg;
    public $title;

    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $full_name, $email, $msg)
    {

        $this->full_name = $full_name;        
        $this->email = $email;
        $this->msg = $msg;
        $this->title = $title;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.contact-sales')
                    ->subject('Action required:  ' . ucfirst($this->title) . '' . ucfirst($this->full_name) . ' is waiting for your reply')
                    ->from($this->email);
    }
}
