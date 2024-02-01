<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $messageContent;

    public function __construct($subject, $messageContent)
    {
        $this->subject = $subject;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->markdown('emails.message'); // You can use a Markdown template or text/html here
    }
}
