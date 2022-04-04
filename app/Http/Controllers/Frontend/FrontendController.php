<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getCategoriesInTopBar()
    {
        $categories = Category::get();
        return view('frontend.layouts.topbar');
    }
}
