<?php

namespace App\Mail\Files;

use App\File;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FileRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $file; 

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(File $file)
    {
        $this->file = $file; 
        $this->user = $file->user;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      return $this->subject('Your file "' .$this->file->title .'" has been rejected')->view('emails.files.new.rejected');
        // return $this->subject('Your file has been approved')->view('emails.files.new.approved');
    }
}
