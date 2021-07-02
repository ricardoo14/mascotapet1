@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Detalle Adopcion </h2>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="p-5"><img class="img-fluid rounded-circle"
                        src="{{ asset('imagenes/' . $p->solicitud->imagen) }}" alt="{{ $p->solicitud->imagen }}">
                </div>
            </div>
        </div>

        <fieldset disabled>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Fecha de publicacion</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->created_at }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Familia biologica</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->familiaBiologica }}"
                        class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Estado esterilizacion</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->estadoEsterilizacion }}"
                        class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Edad</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->edad }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Vacunas</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->vacunas }}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Descripcion salud</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->descripcionSalud }}"
                        class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Descripcion</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->descripcion }}"
                        class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Ciudad</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->ciudad }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Region</label>
                    <input type="text" id="disabledTextInput" value="{{ $p->solicitud->region }}" class="form-control">
                </div>
            </div>

        </fieldset>

        <form action="/meetings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-none">
                <div class="col-md-6">
                    <label>Id publicacion</label>
                    <input type="text" name="idPublicacion" class="form-control" value="{{ $p->id }}">
                </div>
                <div class="col-md-6">
                    <label>Id estado meeting</label>
                    <input type="text" name="idEstadoMeeting" class="form-control" value="3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Motivacion</label>
                    <input type="text" name="motivacion" class="form-control" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Adoptar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
