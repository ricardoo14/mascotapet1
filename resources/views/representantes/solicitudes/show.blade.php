@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Solicitud {{ $s->nombreMascota }}</h2>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('/solicitudr') }}"><button type="button"
                                class="btn btn-primary">Atrás</button></a>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('imagenes/' . $s->imagen) }}"
                                alt="{{ $s->imagen }}"></div>
                    </div>
                </div>

                <fieldset disabled>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Fecha de solicitud</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->created_at }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Familia biologica</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->familiaBiologica->nombre }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Estado esterilizacion</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->estadoEsterilizacion }}"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Edad</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->edad }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Vacunas</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->vacunas }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Descripcion salud</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->descripcionSalud }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Descripcion</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->descripcion }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Ciudad</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->ciudad }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Region</label>
                            <input type="text" id="disabledTextInput" value="{{ $s->region }}" class="form-control">
                        </div>
                    </div>

                </fieldset>

                <div class="row">

                    <form action="/publicaciones" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-none">
                            <div class="col-md-6">
                                <label>Id solicitud</label>
                                <input type="text" name="idSolicitud" class="form-control" value="{{ $s->id }}">
                            </div>
                            <div class="col-md-6">
                                <label>Id fundacion</label>
                                <input type="text" name="idFundacion" class="form-control"
                                    value="{{ $s->user->idFundacion }}">
                            </div>
                            <div class="col-md-6">
                                <label>Id estado publicacion</label>
                                <input type="text" name="idEstadoPublicacion" class="form-control" value="1">
                            </div>
                            <div class="col-md-6">
                                <label>Id familia Biologica</label>
                                <input type="text" name="idFamiliaBiologica" class="form-control"
                                    value="{{ $s->idFamiliaBiologica }}">
                            </div>
                        </div>
                        
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Publicar</button>
                            </div>
                        
                        
                    </form>
                </div>

                
            </div>
        </div>
    </div>
@endsection
