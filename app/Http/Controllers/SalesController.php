<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
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
        $products = Product::all();
        return view('ventas.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        Sale::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->id(),
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('sales.index')->with('success', 'Venta registrada con éxito.');
    }

    public function show($id)
    {
        $sale = Sale::find($id);
        return view('ventas.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        $products = Product::all();
        return view('ventas.edit', compact('sale', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min=1',
        ]);

        $sale = Sale::find($id);
        $product = Product::find($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        $sale->update([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('sales.index')->with('success', 'Venta actualizada con éxito.');
    }

    public function destroy($id)
    {
        Sale::find($id)->delete();
        return redirect()->route('sales.index')->with('success', 'Venta eliminada con éxito.');
    }
}