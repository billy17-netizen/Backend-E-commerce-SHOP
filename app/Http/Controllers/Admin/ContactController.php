<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        date_default_timezone_set('Asia/Jayapura');
        $contact_time = date("h:i:sa");
        $contact_date = date("Y-m-d");

        $result = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Contact Successfully Sent',
            $result => $result,
        ]);
    }
}
