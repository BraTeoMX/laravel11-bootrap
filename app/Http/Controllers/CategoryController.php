<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // Validar y almacenar la categoría
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categorias.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categorias.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar la categoría
    }

    public function destroy($id)
    {
        // Eliminar la categoría
    }
}
