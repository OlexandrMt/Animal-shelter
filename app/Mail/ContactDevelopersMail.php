<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactDevelopersMail extends Mailable
{
    use Queueable, SerializesModels;
	 
	 public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
		 $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
			->subject("New message in Animal Shelter")
			->replyTo($this->content["email"])
			->text('components.email.contactDevelopersMail');
    }
}
