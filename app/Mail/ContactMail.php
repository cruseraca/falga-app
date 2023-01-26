<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Contact
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        if(!empty($this->data->attachment)){
            $file = \Storage::path($this->data->attachment);
            $fileName = explode("/", $this->data->attachment);
            $this->data->attachment = $fileName[count($fileName)-1];
            return $this->subject('Contact US - '. $this->data->subject)->attach($file)->view('emails.contact');
        }
        return $this->subject('Contact US - '. $this->data->subject)->view('emails.contact');
    }
}
