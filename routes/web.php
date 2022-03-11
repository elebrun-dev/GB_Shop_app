<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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


Route::get('/', [HomeController::class, 'index']) ->name('home');
   
Route::get('/catalog',[ProductController::class, 'displayCatalog'])->name('catalog');

Route::get('/product/{id}', [ProductController::class, 'item'])->name('item');

Route::get('/cart', [CartController::class, 'displayCart'])->name('cart');