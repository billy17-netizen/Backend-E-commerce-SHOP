<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function getProductListByRemark(\Request $request, $remark)
    {
        $productList = ProductList::where('remark', $remark)->limit(8)->get();
        return response()->json($productList);
    }

    public function getProductListByCategory(\Request $request, $category)
    {
        $productList = ProductList::where('category', $category)->get();
        return response()->json($productList);
    }

    public function getProductListBySubCategory(\Request $request, $category, $subCategory)
    {
        $productList = ProductList::where('category', $category)->where('subcategory', $subCategory)->get();
        return response()->json($productList);
    }

    public function ProductSearch(Request $request, $key)
    {
        $productList = ProductList::where('title', 'like', '%' . $key . '%')->orWhere('brand', 'like', '%' . $key . '%')->get();
        return response()->json($productList);
    }

    public function SimilarProduct(Request $request)
    {
        $subcategory = $request->subcategory;
        $product_list = ProductList::where('subcategory', $subcategory)->orderBy('id', 'desc')->limit(6)->get();
        return response()->json($product_list);
    }
}
