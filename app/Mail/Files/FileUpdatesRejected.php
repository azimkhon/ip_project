<?php

namespace App\Mail\Files;

use App\File;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FileUpdatesRejected extends Mailable
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

      return $this->subject('Your files "' .$this->file->title .'" updates has been rejected')->view('emails.files.updated.rejected');
      // return $this->subject('Your file has been approved')->view('emails.files.new.approved');
    }
}
