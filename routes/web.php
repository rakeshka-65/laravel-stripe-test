<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [ProductController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/product/view/{product}', [ProductController::class, 'view'])->name('view');
    Route::post('/checkout/{product}', [ProductController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/success', [ProductController::class, 'checkoutSuccess'])->name('success');
    Route::get('/checkout/cancel', [ProductController::class, 'checkoutCancel'])->name('checkout.cancel');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

