<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class Demo extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        // truyền vào thuộc tính data trong class demo = mảng $data được gửi từ Controller
        $this -> data = $data;
        //
    }

    /**
     * Get the message envelope.
     */
    public function build(){
        return $this->from('huypham3062k3@gmail.com', 'HpRestaurant')
                    ->subject('Hóa đơn đặt lịch')
                    ->view('mail.mail')-> with($this -> data);
                    
    }
}
