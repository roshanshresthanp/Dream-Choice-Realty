<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\Notification;
use App\Notifications\allNotification;

class helper{
    public static function notification($receiver,$info,$name){
        date_default_timezone_set('Asia/Kolkata');
        $detail =[
                'date'=>date("F j, Y, g:i a"),
                'name'=> $name,
                'info'=>$info
            ];
        return Notification::send($receiver, new allNotification($detail));
    }
}

?>