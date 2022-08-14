<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;

class SiteInfoController extends Controller
{
    public function getSiteInfo()
    {
        return SiteInfo::get();
    }
}
