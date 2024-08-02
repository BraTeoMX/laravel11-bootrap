@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Productos</h1>
        <!-- Aquí mostrarías la lista de productos -->
        @foreach ($products as $product)
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
            </div>
        @endforeach
    </div>
@endsection
