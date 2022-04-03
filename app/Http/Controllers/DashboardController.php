<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $products = Product::get();
        $categories = Category::get();
        $vendors = Vendor::where('status', 1)->get();
        $applied_vendors = Vendor::where('status', 0)->get();
        return view('admin.index')
            ->with([
                'products' => $products,
                'categories' => $categories,
                'vendors' => $vendors,
                'applied_vendors' => $applied_vendors,
            ]);
    }
}
