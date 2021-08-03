@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Datos rescatador</h2>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('/meetings') }}"><button type="button" class="btn btn-primary">Atrás</button></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="p-5"><img class="img-fluid rounded-circle"
                                src="{{ asset('images/' . $m->publicacion->solicitud->user->avatar) }}"
                                alt="{{ $m->publicacion->solicitud->user->avatar }}"></div>
                    </div>
                </div>

                <fieldset disabled>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Nombre</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->nombre }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Apellido</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->apellido }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Telefono</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->telefono }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Correo electronico</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->email }}" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Region</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->region }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Ciudad</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->user->ciudad }}" class="form-control">
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>

    </div>
@endsection
