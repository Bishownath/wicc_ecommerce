<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::where('vendor_id', auth()->id())->first();
        $image = Image::get();
        return view('vendors.layouts.dashboard', compact('product', 'image'));
    }
}
