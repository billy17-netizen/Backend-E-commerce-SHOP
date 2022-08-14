<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;

class SliderController extends Controller
{
    public function getImageSlider(\Request $request)
    {
        $data = HomeSlider::all();
        return response()->json($data);
    }
}
