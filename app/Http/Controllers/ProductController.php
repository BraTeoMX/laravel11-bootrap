<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mostrar la lista de productos
    public function index()
    {
        // Aquí podrías obtener productos de la base de datos y pasarlos a la vista
        $products = []; // Esto es solo un ejemplo
        return view('productos.index', compact('products'));
    }

    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Almacenar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        // Validar y almacenar el producto
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $product = []; // Aquí obtienes el producto por ID
        return view('productos.show', compact('product'));
    }

    // Mostrar el formulario para editar un producto existente
    public function edit($id)
    {
        $product = []; // Aquí obtienes el producto por ID
        return view('productos.edit', compact('product'));
    }

    // Actualizar un producto existente en la base de datos
    public function update(Request $request, $id)
    {
        // Validar y actualizar el producto
    }

    // Eliminar un producto existente de la base de datos
    public function destroy($id)
    {
        // Eliminar el producto por ID
    }
}
