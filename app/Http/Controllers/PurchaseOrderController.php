<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\PurchaseOrderNotification;
use Illuminate\Support\Facades\Notification;


class PurchaseOrderController extends Controller
{
    public function sendNotification()
    {
        $user = User::first();

        $PurchaceOrderData = [
            'body'=>'you recieved a purchase order',
            'text'=>'Buyer may contact you soon',
            'buttontext'=>'Go to website',
            'url'=>url('/'),
        ];

        // $user->notify(new PurchaseOrderNotification($PurchaceOrderData));
        Notification::send($user,new PurchaseOrderNotification($PurchaceOrderData));
    }
}
