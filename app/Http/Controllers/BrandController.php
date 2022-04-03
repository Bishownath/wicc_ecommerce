<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\StoreRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // $brand = Brand::create($request->data());
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;

        if (request()->hasFile('image')) {
            $file  = request()->file('image');
            $filename = time() .  Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move('images/brands', $filename);
            $brand->image = $filename;
        }
        $brand->save();

        Alert::toast('Created Successfully');
        return redirect()
            ->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->data());
        Alert::toast('Updated Successfully');
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if ($brand->exists) {
            $filepath = 'images/brands/' . $brand->image;
            if ($filepath) {
                unlink($filepath);
            }
            $brand->delete();
        }
        Alert::toast('Deleted Successfully');
        return redirect()->back();
    }
}
