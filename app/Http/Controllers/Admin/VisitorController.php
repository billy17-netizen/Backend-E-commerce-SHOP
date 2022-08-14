<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function GetVisitors()
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Jayapura');
        $visit_time = date("h:i:sa");
        $visit_date = date("Y-m-d");
        $visitor = Visitor::insert(['ip_address' => $ip_address, 'visit_time' => $visit_time, 'visit_date' => $visit_date]);
        return $visitor;
    }
}
