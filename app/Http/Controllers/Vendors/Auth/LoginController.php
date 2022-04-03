<?php

namespace App\Http\Controllers\Vendors\Auth;

// use Auth;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    //    protected $redirectTo = RouteServiceProvider::BRANCH;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('vendors.auth.login');
    }

    public function login(Request $request)
    {
        $vendor = Vendor::where('email', $request->get('email'))->first();


        if (!$vendor || !Hash::check($request->get('password'), $vendor->password)) {
            return back()->with('error', 'These credentials do not match our records.');
        }

        $checkGuard = auth()->guard('vendor')
            ->attempt(
                [
                    'email' => $request->get('email'),
                    'password' => $request->get('password'),
                    'status' => 1,
                ],
                $request->filled('remember'),
            );

        if (!$checkGuard) {
            return back()->with('error', 'These credentials do not match our records.');
        }

        // return 'hello';
        return redirect()->route('vendors.dashboard');
    }

    public function logout()
    {
    }
}
