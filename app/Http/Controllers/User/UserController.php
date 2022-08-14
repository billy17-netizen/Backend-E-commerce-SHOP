<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function User()
    {
        return Auth::user();
    }
}
