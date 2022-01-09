<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/home', function () {
  return view('home');
});




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/seller', function () {
    return view('seller.dashboard');
  })->name('dashboard');

  Route::get('/trackorder', function () {
    return view('trackorder');
  });


  Route::get('/addProduct', function () {
    return view('seller.addProduct');
  });

  Route::get('/viewProduct', function () {
    return view('seller.viewSingleProduct');
  });


  Route::get('/allProduct', [App\Http\Controllers\ProductController::class, 'show']);

  Route::get('/allProduct/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

  Route::post('/submitted', [App\Http\Controllers\ProductController::class, 'store']);

  Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'edit']);

  Route::post('/updated/{id}', [App\Http\Controllers\ProductController::class, 'update']);
});
