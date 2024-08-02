<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    }
    return redirect('/login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Ruta para la página de inicio
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rutas para categorías
    Route::resource('admin/categories', CategoryController::class);
    
    // Rutas para productos
    Route::resource('admin/products', ProductController::class);

    // Rutas para ventas
    Route::resource('sales', SalesController::class);
});
