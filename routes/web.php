<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController as AdminDashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Vendor\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.frontend');
});

Auth::routes();

// Auth::routes(['register' => false]);
Route::get('/vendor/apply', [UserController::class, 'vendorApply'])->name('vendors.apply');
Route::post('/vendor/apply', [UserController::class, 'vendorApplied'])->name('vendors.applied');
Route::post('/vendor/changeStatus/{id}', [UserController::class, 'changeStatus'])->name('vendor.changeStatus');
Route::get('/vendor/appliedVendor', [UserController::class, 'appliedVendor'])->name('vendors.appliedVendor');

Route::group(['middleware' => 'auth', 'isAdmin', 'prefix' => 'admin'],  function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('isAdmin');
    Route::resource('/vendor', UserController::class);

    // category resource controller
    Route::resource('/category', CategoryController::class);

    // product controller resource
    Route::resource('/product', ProductController::class);

    Route::resource('/image', ImageController::class);

    Route::resource('/brand', BrandController::class);
});
