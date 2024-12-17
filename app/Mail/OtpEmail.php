<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OtpEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     protected $otp;
    public function __construct($otp)
    {
        $this->otp=$otp;
    }
  public function build()
  {
    return $this->view('auth.email-otp')
        ->subject('OTP Verification')
        ->with(array('otp'=>$this->otp));
  }
   
}
