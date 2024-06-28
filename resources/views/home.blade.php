@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="row">
                    <h1>Hola</h1>
                    <p>Nada</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Abrir Modal
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Contenido del Modal...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-primary">Guardar cambios</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Acordeón Item #1
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Contenido del Acordeón Item #1...
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Acordeón Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Contenido del Acordeón Item #2...
                            </div>
                          </div>
                        </div>
                      </div>
                    <hr>
                    <!-- Botón básico -->
                    <button type="button" class="btn btn-primary">Botón Primario</button>

                    <!-- Botones en grupo -->
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Izquierda</button>
                    <button type="button" class="btn btn-secondary">Medio</button>
                    <button type="button" class="btn btn-warning">Derecha</button>
                    </div>

                    <div>
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">No compartiremos tu dirección de correo electrónico con nadie más.</div>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Aceptar términos y condiciones</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </form>
                          
                    </div>
                    <div class="alert alert-primary" role="alert">
                        Esta es una alerta primaria. ¡Bien hecho!
                      </div>
                      <div class="alert alert-secondary" role="alert">
                        Esta es una alerta secundaria.
                      </div>
                      <div class="alert alert-success" role="alert">
                        Esta es una alerta de éxito. ¡Bien hecho!
                      </div>
                      <div class="alert alert-danger" role="alert">
                        Esta es una alerta de peligro. ¡Cuidado!
                      </div>
                      <div class="alert alert-warning" role="alert">
                        Esta es una alerta de advertencia. ¡Atención!
                      </div>
                      <div class="alert alert-info" role="alert">
                        Esta es una alerta informativa. ¡Importante!
                      </div>
                      <div class="alert alert-light" role="alert">
                        Esta es una alerta ligera.
                      </div>
                      <div class="alert alert-dark" role="alert">
                        Esta es una alerta oscura.
                      </div>
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
