@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Venta</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sales.store') }}" method="POST" id="salesForm">
            @csrf
            <div class="form-group">
                <label for="product_id">Producto</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }} - ${{ $product->price }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Cantidad</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
            </div>

            <div class="form-group">
                <label for="total_price">Total a Pagar</label>
                <input type="text" class="form-control" id="total_price" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Venta</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productSelect = document.getElementById('product_id');
            const quantityInput = document.getElementById('quantity');
            const totalPriceInput = document.getElementById('total_price');

            function updateTotalPrice() {
                const selectedProduct = productSelect.options[productSelect.selectedIndex];
                const price = selectedProduct.getAttribute('data-price');
                const quantity = quantityInput.value;
                const totalPrice = price * quantity;
                totalPriceInput.value = totalPrice.toFixed(2);
            }

            productSelect.addEventListener('change', updateTotalPrice);
            quantityInput.addEventListener('input', updateTotalPrice);

            // Inicializa el precio total al cargar la página
            updateTotalPrice();
        });
    </script>
@endsection