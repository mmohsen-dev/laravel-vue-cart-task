<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::middleware('authed.user')->group(function () {
Route::get('/register', [AuthController::class, 'registerView'])->name('register-view');
Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('verfiy-account/{userId}/{token}', [AuthController::class, 'verifyEmail'])->name('verfiy-account');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/checkout', [CartController::class, 'checkoutView'])->name('checkout-view');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
    Route::post('/cart', [CartController::class, 'addProduct'])->name('add-product');
    Route::get('/cart', [CartController::class, 'CartItems'])->name('cart');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/cart/delete', [CartController::class, 'removeProduct'])->name('cart-delete');


});

