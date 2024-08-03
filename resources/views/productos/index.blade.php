@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Producto</a>
        
        @foreach ($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p>Precio: ${{ $product->price }}</p>
                    <p>Stock: {{ $product->stock }}</p>
                    <p>Categoría: {{ $product->category->name }}</p>
                    
                    <a href="{{ route('productos.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('productos.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection