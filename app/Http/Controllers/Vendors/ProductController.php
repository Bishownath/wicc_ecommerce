<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Vendor;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    protected $route = 'vendors.product';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->where('vendor_id', auth()->id())->paginate(5);

        return view($this->route . '.index')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name', 'id');
        $vendor = Vendor::pluck('name', 'id');
        $tags = Tag::get();
        return view($this->route . '.create', compact('category', 'vendor', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $product = Product::create($request->data());

        if (request()->hasFile('image')) {
            if ($files = request()->file('image')) {
                foreach ($files as $key => $file) {
                    $filename = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->move('images/product', $filename);

                    Image::create([
                        'vendor_id' => auth()->id(),
                        'product_id' => $product->id,
                        'image' => $filename,
                    ]);
                }
            }
        }
        $product->save();

        Alert::toast('Created Successfully');
        return redirect()
            ->route($this->route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // dd($product);
        // $images = Image::get();
        $images = Image::where('product_id', $product->id)->paginate(5);
        return view($this->route . '.show', compact('product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::pluck('name', 'id');
        $tags = Tag::get();
        return view($this->route . '.edit', compact('category', 'product', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->data());
        Alert::toast('Updated Successfully');
        return redirect()->route($this->route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        foreach ($product->images as  $prod) {
            $filepath = ("/images/product/" . $prod->image);
            if (file_exists($filepath)) {
                unlink($filepath);
            }
            // $prod->image->detach();
        }
        $product->delete();
        // ToDo delete product image from folder
        Alert::toast('Deleted Successfully');
        return redirect()
            ->back();
    }

    public function changeStatus($slug)
    {
        $product = Product::where('slug', '=', $slug)
            ->first();

        if ($product->status == 1) {
            $product->status = 0;
        } else {
            $product->status = 1;
        }
        $product->save();

        Alert::toast('Success', 'Status Changed');
        return redirect()->back();
    }
}
