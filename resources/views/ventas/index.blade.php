@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Ventas de productos variados</h1>
        <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Agregar Venta</a>
        
        @foreach ($sales as $sale)
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Producto: {{ $sale->product->name }}</h2>
                    <p>Cantidad: {{ $sale->quantity }}</p>
                    <p>Total a Pagar: ${{ $sale->total_price }}</p>
                    <p>Comprador: {{ $sale->user->name }}</p>
                    
                    <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection