<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackOfficeController;

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
   
Route::controller(ProductController::class)->group(function () {

    Route::get('/catalog','displayCatalog')->name('catalog');
    Route::get('/catalog/{cat}','displayCatalogByCategory')->name('category');
    Route::get('/product/{id}', 'displayItem')->name('item');    
});


Route::controller(CartController::class)->group(function () {

    Route::get('/cart','displayCart')->name('cart.show');
    Route::post('/cart/add/{product}', 'create')->name('cart.add');
    Route::get('/cart/edit/{product}', 'edit')->name('cart.edit');
    Route::delete('/cart/remove/{product}', 'destroy')->name('cart.remove');
    Route::get('cart/empty', 'empty')->name('cart.empty');

});

Route::controller(ContactController::class)->group(function () {

    Route::get('/contact','create')->name('contact');
    Route::post('/contact','store')->name('results');
});

Route::controller(BackOfficeController::class)->group(function () {

    Route::get('/backoffice', 'index')->name('back');
    Route::get('/backoffice/catalog', 'catalog')->name('backcatalog');
    Route::get('/backoffice/catalog/{id}/show', 'show');
    Route::get('/backoffice/orders/show/{id}', 'showOrder')->name('show.orders');
    Route::get('/backoffice/orders', 'orders')->name('backorders');

    Route::get('/backoffice/catalog/create', 'create');
    Route::post('/backoffice/catalog', 'store')->name('back.store');;

    Route::get('/backoffice/catalog/{id}/edit', 'edit');
    Route::patch('/backoffice/catalog/{id}', 'update');

    Route::delete('/backoffice/catalog/{id}', 'destroy');
});