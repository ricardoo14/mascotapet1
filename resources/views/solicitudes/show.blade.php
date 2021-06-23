@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Detalle {{$s->nombreMascota}}</h2>
            </div>
            <div class="col-md-6"></div>
        </div>
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('imagenes/'.$s->imagen)}}" alt="{{$s->imagen}}"></div>
                </div>
                </div>

            <fieldset disabled>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Fecha de solicitud</label>
                        <input type="text" id="disabledTextInput" value="{{$s->created_at}}" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Familia biologica</label>
                        <input type="text" id="disabledTextInput" value="{{$s->familiaBiologica}}" class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="disabledTextInput" class="form-label">Estado esterilizacion</label>
                      <input type="text" id="disabledTextInput" value="{{$s->estadoEsterilizacion}}" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="disabledTextInput" class="form-label">Edad</label>
                      <input type="text" id="disabledTextInput" value="{{$s->edad}}" class="form-control">
                  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Vacunas</label>
                    <input type="text" id="disabledTextInput" value="{{$s->vacunas}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="disabledTextInput" class="form-label">Descripcion salud</label>
                    <input type="text" id="disabledTextInput" value="{{$s->descripcionSalud}}" class="form-control">
                </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="disabledTextInput" class="form-label">Descripcion</label>
                  <input type="text" id="disabledTextInput" value="{{$s->descripcion}}" class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="disabledTextInput" class="form-label">Ciudad</label>
                  <input type="text" id="disabledTextInput" value="{{$s->ciudad}}" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                  <label for="disabledTextInput" class="form-label">Region</label>
                  <input type="text" id="disabledTextInput" value="{{$s->region}}" class="form-control">
              </div>
              <div class="form-group col-md-6">
                  <label for="disabledTextInput" class="form-label">Estado solicitud</label>
                  <input type="text" id="disabledTextInput" value="{{$s->idEstadoSolicitud}}" class="form-control">
              </div>
          </div>
            </fieldset>
            <div class="row">
                <div class="col-md-12">
                  
                  
                </div>
            </div>
        </form>
    </div>
@endsection
