<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vendor\StoreRequest;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.index');
    }
    public function index()
    {
        $users = Vendor::latest()->paginate(5);
        return view('user.index', compact('users'));
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
            ->route('user.index')
            ->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->data());
        return redirect()->route('user.index')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->exists()) {
            $user->delete();
        }
        return redirect()
            ->back()
            ->with([
                'success' => 'Deleted Successfully'
            ]);
    }
}
