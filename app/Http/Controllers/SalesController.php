<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('ventas.index', compact('sales'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Validar y almacenar la venta
    }

    public function show($id)
    {
        $sale = Sale::find($id);
        return view('ventas.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        return view('ventas.edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar la venta
    }

    public function destroy($id)
    {
        // Eliminar la venta
    }
}
