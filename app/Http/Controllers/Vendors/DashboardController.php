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
        $product = Product::where('vendor_id', auth()->id())->count();
        $image = Image::where('vendor_id', auth()->id())->count();
        return view('vendors.layouts.dashboard', compact('product', 'image'));
    }
}
