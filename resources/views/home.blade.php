@extends('layouts.app')

@section('content')
  <div class="container">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div class="card-body">
            </div>
            <div class="row">
              <h1> Inicio del sitio </h1>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
