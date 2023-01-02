<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Carbon;
class NotificationController extends Controller
{
    public function index()
    {
        $data['notif']=Notification::all();

        return view('admin.notifications',$data);
    }

    public function read_notification($id)
    {
        $notif =Notification::whereId($id)->first();
        $notif->read_at = Carbon::now();
        $notif->save();
        return redirect(url('notifications'));

    }
}
