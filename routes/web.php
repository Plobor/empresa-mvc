<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('/products');
})->name('home');

// Rutas para el controlador de productos
Route::resource('products', ProductController::class);

