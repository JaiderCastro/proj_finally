<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
//use Illuminate\Support\Facades\DB;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('user.user');
})->name('user');

Route::get('/user/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products', [ProductController::class, 'update'])->name('products.update');


//->name('Products.index');
/* Route::resource('products','App\http\Controllers\ProductController'); */