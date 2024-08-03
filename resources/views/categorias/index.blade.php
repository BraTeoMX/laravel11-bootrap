@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Categorías</h1>
    
    <!-- Formulario para agregar nueva categoría -->
    <form action="{{ route('categorias.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Nombre de la categoría" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="description" class="form-control" placeholder="Descripción (opcional)">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Agregar Categoría</button>
            </div>
        </div>
    </form>

    <!-- Tabla de categorías -->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('categorias.edit', $category->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('categorias.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar esta categoría?')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection