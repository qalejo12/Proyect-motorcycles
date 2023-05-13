<?php

use App\Models\CategoryBike;
use App\Models\ProductBike;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'categories' => CategoryBike::all(),
        'bikes' => ProductBike::where('status', 1)->get()
    ]);
});

Route::resource('bikes', \App\Http\Controllers\Product::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('categories', \App\Http\Controllers\Category::class);
    //Route::get('/register', function () {
    //    return view('auth.register');
    // })->name('register');
    Route::resource('users', \App\Http\Controllers\UserController::class);
});
