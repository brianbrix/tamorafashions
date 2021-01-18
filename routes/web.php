<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'index']);
Route::get('/user', [ViewController::class, 'account']);
Route::get('/account', [ViewController::class, 'dashboard']);
Route::get('/checkout', [ViewController::class, 'checkout']);
Route::get('/cart', [ViewController::class, 'cart']);
Route::get('/products', [ViewController::class, 'products']);
Route::get('/product', [ViewController::class, 'product']);
Route::get('/wishlist', [ViewController::class, 'wish']);
Route::get('/contact-us', [ViewController::class, 'contact']);
