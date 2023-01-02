<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notification()
    {
        $data['notification'] = Notification::with('notifiable')->whereNotifiableId(auth()->user()->id)->paginate(4);
        return view('user.notification.notification', $data);
    }

    public function read_notification($id)
    {
        $notif = Notification::whereId($id)->first();
        $notif->read_at = \Carbon\Carbon::now();
        $notif->save();
        return redirect()->back()->with('message', 'notification is ready successfully...!');

    }
}
