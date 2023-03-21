<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        // dd($data->message); // just here
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
      {

        return $this->subject('Contact US - '. $this->data->message)

        ->view('emails.Contact');



                    // return view('emails.Contact')->with('success','playr was added');

                    // return $this->data('Contact US - '. $this->data->message)
                    // ->view('emails.contact');

    }




}
