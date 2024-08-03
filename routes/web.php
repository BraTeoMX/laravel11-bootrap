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
    Route::resource('admin/categories', CategoryController::class)->names([
        'index' => 'categorias.index',
        'create' => 'categorias.create',
        'store' => 'categorias.store',
        'show' => 'categorias.show',
        'edit' => 'categorias.edit',
        'update' => 'categorias.update',
        'destroy' => 'categorias.destroy',
    ]);
    
    // Rutas para productos
    Route::resource('admin/products', ProductController::class)->names([
        'index' => 'productos.index',
        'create' => 'productos.create',
        'store' => 'productos.store',
        'show' => 'productos.show',
        'edit' => 'productos.edit',
        'update' => 'productos.update',
        'destroy' => 'productos.destroy',
    ]);

    // Rutas para ventas
    Route::resource('sales', SalesController::class)->names([
        'index' => 'sales.index',
        'create' => 'sales.create',
        'store' => 'sales.store',
        'show' => 'sales.show',
        'edit' => 'sales.edit',
        'update' => 'sales.update',
        'destroy' => 'sales.destroy',
    ]);
});
