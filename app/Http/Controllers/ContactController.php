<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function footerSendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'message' => 'required|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->message
        ];

        Mail::send('emails.contact', $data, function ($mail) {
            $mail->to('richardsteve979@gmail.com', 'National Shooting Academy')->subject
            ('Contact Us Enquiry');
            $mail->from('richardsteve979@gmail.com', 'National Shooting Academy');
        });

        return redirect()->back()->with(['message' => 'Message Successfully Sent!']);
    }
}
