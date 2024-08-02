@extends('layouts.app')

@section('content')
  <div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h4>Dato del dashboard</h4>
          </div>
          <div class="card-body">
            <h1> Inicio del sitio </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
