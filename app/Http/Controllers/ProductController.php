<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest as ProductStoreRequest;
use App\Http\Requests\Product\UpdateRequest as ProductUpdateRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('product.index')->with([
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
        return view('product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->data());

        if (request()->hasFile('images')) {
            if ($files = request()->file('images')) {
                foreach ($files as $key => $file) {
                    $filename = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->move('images/product', $filename);

                    Image::create([
                        'product_id' => $product->id,
                        'images' => $filename,
                    ]);
                }
            }
        }
        $product->save();

        return redirect()
            ->route('product.index')
            ->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
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
        // $category = Category::get();
        return view('product.edit', compact('category', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->update($request->data());
        return redirect()->route('product.index')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->exists()) {
            $product->delete();
        }
        return redirect()
            ->back()
            ->with([
                'success' => 'Deleted Successfully'
            ]);
    }
}
