<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {

        $data = [
            'name' => \request('name'),
            'mail' => \request('mail'),
            'phone' => \request('phone'),
            'message_data' => \request('message'),
        ];


        Mail::send('mail.mail', $data, function ($message) {
            $message->to("info@agrigate.asia", "Agrigate")->subject("Agrigate Mail");
        });

        session()->flash("success","Mail sent successfully");
        return redirect()->back();
    }
}
