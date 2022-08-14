<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function getNotification(\Request $request)
    {
        $notifications = Notification::all();
        return response()->json($notifications);
    }
}
