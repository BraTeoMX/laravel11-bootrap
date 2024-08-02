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
        <!-- Botón para mostrar la alerta -->
        <button class="btn btn-primary show-alert" data-product="1">Mostrar Alerta</button>
    </div>

    <!-- Script para manejar el evento SweetAlert2 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.show-alert').forEach(button => {
                button.addEventListener('click', function() {
                    const productName = this.getAttribute('data-product');
                    
                    Swal.fire({
                        title: '¡Alerta!',
                        text: `Producto seleccionado: ${productName}`,
                        icon: 'info',
                        confirmButtonText: 'Aceptar'
                    });
                });
            });
        });
    </script>
@endsection
