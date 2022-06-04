<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Greetings extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() // which view will return
    {

        //config override 

        
        $message = $this->details['message'];
        $imagePath = public_path('images/') . $this->details['image'];
        return $this->subject('Subject email')
                    ->view('email',compact('message'))
                    ->attach($imagePath, [
                        'as' => 'name.png',
                    ]);
    }
}
