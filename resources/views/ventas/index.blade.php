@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Ventas</h1>
        <a href="{{ route('sales.create') }}" class="btn btn-primary">Agregar Venta</a>
        <ul>
        </ul>
    </div>
@endsection
