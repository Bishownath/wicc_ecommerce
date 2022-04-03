<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{
    protected $route = 'vendors.images';

    public function index()
    {
        try {
            $products = Product::where('vendor_id', auth()->id())->get();
            foreach ($products as $key => $prod) {
                // $images = Image::where('product_id', $prod->id)->paginate(5);
                $images = Image::where('vendor_id', auth()->id())->paginate(5);
            }
            return view($this->route . '.index', compact('images', 'products'));
        } catch (Exception $e) {
            return view('vendors.error.error');
        }

        // return 'Please Add Image';
    }


    public function destroy(Image $image)
    {
        $img = $image->whereId($image->id);
        $img->delete();
        Alert::toast('Product Image Deleted');
        return redirect()->back();
    }
}
