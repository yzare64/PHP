<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $lname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$lname)
    {
        $this->name=$name;
        $this->lname=$lname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email')->with(['name'=>$this->name,'lname'=>$this->lname])->subject('this is test subject');
    }
}
