<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\API\ProductController as APIProductController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::apiResource('api/products', APIProductController::class); 

Route::get('/', [HomeController::class, 'index']) ->name('home');
   
Route::controller(ProductController::class)->group(function () {

    Route::get('/catalog','showCatalog')->name('catalog');
    Route::get('/catalog/{cat}','showCatalogByCategory')->name('category');
    Route::get('/product/{id}', 'showOneItem')->name('item');    
});


Route::controller(CartController::class)->group(function () {

    Route::get('/cart','show')->name('cart.show');
    Route::post('/cart/add/{product}', 'add')->name('cart.add');
    Route::delete('/cart/remove/{product}', 'remove')->name('cart.remove');
    Route::get('cart/empty', 'empty')->name('cart.empty');

});

Route::controller(ContactController::class)->group(function () {

    Route::get('/contact','create')->name('contact');
    Route::post('/contact','store')->name('results');
});

Route::controller(BackOfficeController::class)->middleware(['auth'])->group(function () {

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