@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Categorías</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Agregar Categoría</a>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
