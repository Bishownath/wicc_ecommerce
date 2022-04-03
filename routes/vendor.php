<?php

// namespace App\Http\Controllers\Backend\Vendor;

use App\Http\Controllers\TagController;
use App\Http\Controllers\Vendors\ProductController;
use App\Http\Controllers\Vendors\Auth\LoginController;
use App\Http\Controllers\Vendors\DashboardController;
use App\Http\Controllers\Vendors\ImageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'vendors', 'middleware' => ['auth:vendor', 'web']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('vendors.dashboard');

    // Route::resource('/product', ProductController::class);
    Route::get('/product', [ProductController::class, 'index'])->name('vendors.product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('vendors.product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('vendors.product.store');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('vendors.product.show');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('vendors.product.edit');
    Route::match(['put', 'patch'], '/product/{product}/update', [ProductController::class, 'update'])->name('vendors.product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('vendors.product.destroy');


    Route::get('/image', [ImageController::class, 'index'])->name('vendors.image.index');
    Route::get('/image/{image}', [ImageController::class, 'show'])->name('vendors.image.show');
    Route::delete('/image/{image}', [ImageController::class, 'destroy'])->name('vendors.image.destroy');

    // Route::resource('/tag', TagController::class);
    Route::get('/tag', [TagController::class, 'index'])->name('vendors.tags.index');
    Route::get('/tag/create', [TagController::class, 'create'])->name('vendors.tags.create');
    Route::post('/tag', [TagController::class, 'store'])->name('vendors.tags.store');
    Route::get('/tag/{tag}/edit', [TagController::class, 'edit'])->name('vendors.tags.edit');
    Route::match(['put', 'patch'], '/tag/{tag}/update', [TagController::class, 'update'])->name('vendors.tags.update');
    Route::delete('/tag/{tag}/destroy', [TagController::class, 'destroy'])->name('vendors.tags.destroy');
});

Route::group(['prefix' => 'vendors', 'as' => 'vendors.', 'namespace' => 'Vendors\\Auth'], function () {

    //login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.store');


    //logout
    Route::post('logout', 'LoginController@logout')->name('logout');

    //password confirm
    Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'ConfirmPasswordController@confirm');

    //forgot password
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //password reset
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    //register
    Route::get('auth/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
});
