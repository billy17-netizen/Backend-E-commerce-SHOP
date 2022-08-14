<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favourites;
use App\Models\ProductList;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function addFavourite(Request $request)
    {
        $product_code = $request->product_code;
        $email = $request->email;
        $productDetails = ProductList::where('product_code', $product_code)->get();
        $result = Favourites::insert([
            'email' => $email,
            'image' => $productDetails[0]['image'],
            'product_name' => $productDetails[0]['title'],
            'product_code' => $product_code,
        ]);
        if ($result) {
            return response()->json(['status' => 'success', 'message' => 'Product added to favourite successfully']);
        }
        return response()->json(['status' => 'error', 'message' => 'Something went wrong']);
    }

    public function favouriteList(Request $request)
    {
        $email = $request->email;
        $result = Favourites::where('email', $email)->get();
        return $result;
    }

    public function favouriteRemove(Request $request)
    {
        $product_code = $request->product_code;
        $email = $request->email;
        $result = Favourites::where('product_code', $product_code)->where('email', $email)->delete();
        return $result;
    }
}
