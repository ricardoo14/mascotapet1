@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Meeting enviado {{ $m->publicacion->solicitud->nombreMascota }}</h2>
                    </div>

                    <div class="col-md-1">
                        <a href="{{ url('/meetings') }}"><button type="button" class="btn btn-primary">Atrás</button></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="p-5"><img class="img-fluid rounded-circle"
                                src="{{ asset('imagenes/' . $m->publicacion->solicitud->imagen) }}"
                                alt="{{ $m->publicacion->solicitud->imagen }}"></div>
                    </div>
                </div>

                <fieldset disabled>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Fecha de solicitud</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->created_at }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Familia biologica</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->familiaBiologica->nombre }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Estado esterilizacion</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->estadoEsterilizacion }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Edad</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->publicacion->solicitud->edad }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Vacunas</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->publicacion->solicitud->vacunas }}"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Descripcion salud</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->descripcionSalud }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Descripcion</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->descripcion }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Ciudad</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->publicacion->solicitud->ciudad }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Region</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->publicacion->solicitud->region }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="disabledTextInput" class="form-label">Motivacion</label>
                            <textarea rows="4" type="text" id="disabledTextInput" value="{{ $m->motivacion }}"
                                class="form-control">{{ $m->motivacion }}</textarea>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </div>
@endsection
