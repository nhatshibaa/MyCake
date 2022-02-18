<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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
//Homepage
Route::get('/', [IndexController::class, "index"]);

//Shop
Route::get('/shop', [ShopController::class, "index"]);

//Product
Route::get('/detail', [ProductController::class, "detail"]);
Route::get('/wishlist', [ProductController::class, "wishlist"]);
Route::get('/cart', [ProductController::class, "cart"]);
Route::get('/checkout', [ProductController::class, "checkout"]);

//Client
Route::get('/about-us', [ClientController::class, "about"]);
Route::get('/contact-us', [ClientController::class, "contact"]);
Route::get('/blog', [ClientController::class, "blog"]);
Route::get('/blog-detail', [ClientController::class, "blogDetail"]);
