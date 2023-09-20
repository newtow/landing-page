<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsWebsite extends Mailable
{
    use Queueable, SerializesModels;
    protected $nama,$subjek,$email,$pesan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$email,$subjek,$pesan)
    {
        $this->nama = $nama;
        $this->email =$email;
        $this->subjek =$subjek;
        $this->pesan =$pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject($this->subjek)->view('emails.ContactUs')->with([
            'username'=>$this->nama,
            'pesan'=>$this->pesan,
            'subjek'=>$this->subjek,
            'email'=>$this->email,
        ]);
    }
}
