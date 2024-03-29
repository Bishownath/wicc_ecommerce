<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\Vendor\StoreRequest;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function index()
    {
        $vendors = Vendor::where('status', 1)->latest()->paginate(5);
        return view('user.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Vendor::create($request->data());

        return redirect()
            ->route('vendor.index')
            ->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('user.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('user.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Vendor $vendor)
    {
        $vendor->update($request->data());
        Alert::toast('Updated Successfully');
        return redirect()->route('vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        if ($vendor->exists()) {
            $vendor->delete();
        }
        return redirect()
            ->back()
            ->with([
                'success' => 'Deleted Successfully'
            ]);
    }

    public function vendorApply()
    {
        // return 'vendor apply';
        return view('frontend.vendorApply.apply');
    }

    public function vendorApplied(StoreRequest $request)
    {
        // return 'vendor applied';
        Vendor::create($request->data());
        Alert::toast('Requested Successfully');
        return redirect()->back();
    }

    public function changeStatus($id)
    {
        $vendor = Vendor::findOrFail($id);
        // dd($vendor);
        if ($vendor->status == 0) {
            $vendor->status = 1;
            $vendor->save();
        } else {
            $vendor->status = 0;
            $vendor->save();
        }
        // return $vendor->status;
        Alert::toast('Status Changed');
        return redirect()->back();
    }

    public function appliedVendor()
    {
        $vendors = Vendor::where('status', 0)->paginate(5);
        return view('user.appliedVendor', compact('vendors'));
    }
}
