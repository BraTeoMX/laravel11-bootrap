<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    // Mostrar la lista de productos
    public function index()
    {
        $products = Product::with('category')->get();
        return view('productos.index', compact('products'));
    }

    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        $categories = Category::all();
        return view('productos.create', compact('categories'));
    }

    // Almacenar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('productos.show', compact('product'));
    }

    // Mostrar el formulario para editar un producto existente
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('productos.edit', compact('product', 'categories'));
    }

    // Actualizar un producto existente en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    // Eliminar un producto existente de la base de datos
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}