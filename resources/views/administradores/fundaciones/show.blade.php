@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Detalle de fundacion</h2>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('/gestionfundacion') }}"><button type="button"
                                class="btn btn-primary">Atrás</button></a>
                    </div>
                </div>

                <fieldset disabled>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Nombre de fundacion</label>
                            <input type="text" id="disabledTextInput" value="{{ $fundacion->nombreFundacion }}"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Rut</label>
                            <input type="text" id="disabledTextInput" value="{{ $fundacion->rut }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Comuna</label>
                            <input type="text" id="disabledTextInput" value="{{ $fundacion->comuna }}"
                                class="form-control">
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </div>
@endsection
