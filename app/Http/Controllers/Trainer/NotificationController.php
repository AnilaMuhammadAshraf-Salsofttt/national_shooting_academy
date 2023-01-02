<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function allNotifications()
    {
   
   
        // $notifications = array(["time" => "12:00", "date" => "2021-10-10", "description" => "Test notification"], ["time" => "12:00", "date" => "2021-10-10", "description" => "Test notification"], ["time" => "12:00", "date" => "2021-10-10", "description" => "Test notification"]);
        // $notifications = Notification::whereNotifiable_id(auth()->user()->id)->get();
        $notifications = Notification::all();
       
        return response()->json(["notifications" => $notifications]);
        // $data = array('id'=>'1','title'=>'test','description'=>'test','type'=>'create course');
        // $notification = new Notification();
        // $notification->data = $data;
        // $notification->save(); 
   
    }
}
