<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function main()
    {
        $categories = Category::get();
        $subCategories = SubCategory::get();
        return view('frontend.frontend', compact('categories', 'subCategories'));
    }
}
