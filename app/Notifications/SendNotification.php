<?php

namespace App\Notifications;

use App\Models\Notification;

class SendNotification
{

    protected $type;
    protected $notifiable_type;
    protected $notifiable_id;
    protected $payload;


    public function InsertNotificationIn_DB($type, $notifiable_type, $notifiable_id, Array $payload = [])
    {
       $noti =  new Notification();
       $noti->type = $type;
       $noti->notifiable_type = $notifiable_type;
       $noti->notifiable_id = $notifiable_id;
       $noti->data = json_encode($payload);
       $noti->save();

    }


}
