<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;

class CategoriesController extends Controller
{
    public function getCategory()
    {
        $categories = Category::all();
        $categoriesDetails = [];

        foreach ($categories as $value) {
            $sub_category = SubCategory::where('category_name', $value->category_name)->get();
            $item = [
                'category_name' => $value->category_name,
                'category_image' => $value->category_image,
                'subcategory_name' => $sub_category,
            ];
            $categoriesDetails[] = $item;
        }
        return $categoriesDetails;
    }

}
