<?php

namespace App\Notifications;

use Illuminate\Support\Facades\Mail;

class SendEmail
{
    protected $email;
    protected $file_name;
    protected $payload;

    public function SendNotificationIn_Email($file_name, $email, Array $payload = [])
    {
        Mail::send($file_name, $payload, function ($message) use ($email) {
            $message->to($email, config('app.name'))->subject
            (config('app.name') . "Sign up");
            $message->from(config('mail.from.address'), config('app.name'));

        });
    }
}
