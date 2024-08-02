@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <!-- Campos del formulario -->
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="description">Descripción:</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div>
                <label for="price">Precio:</label>
                <input type="number" id="price" name="price">
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
