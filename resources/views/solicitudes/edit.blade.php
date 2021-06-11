@extends('layouts.plantilla')
@section ('content')

<div class="container">
<div class="row">
<div class="col-sm-6">

<h3>Editar solicitud</h3>
//esta parte es la validacion
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</div>
<form action="{{route('solicitudes.update',$soli->id)}}" method="POST">
@method('PATCH')
@csrf

<div class="row">
  <div class="form-group col-md-6">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="nombreMascota" value="{{$soli->nombreMascota}}" placeholder="Escribe nombre mascota">
  </div>
  <div class="form-group col-md-6">
    <label for="name">Edad mascota</label>
    <input type="text" class="form-control" name="edad" value="{{$soli->edad}}" placeholder="Escribe edad mascota">
  </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
      <label for="name">Ciudad</label>
      <input type="text" class="form-control" name="ciudad" value="{{$soli->ciudad}}" placeholder="Escribe ciudad">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Region</label>
      <input type="text" class="form-control" name="region" value="{{$soli->region}}" placeholder="Escribe region">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
      <label for="name">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" value="{{$soli->descripcion}}" placeholder="Escribe descripcion">
    </div>
    <div class="form-group col-md-6">
        <label>Familia biologica</label>
    <select class="form-control" name="familiaBiologica" >
        <option value="{{$soli->familiaBiologica}}" selected>{{$soli->familiaBiologica}}</option>
        <option value="perro">Perro</option>
        <option value="gato">Gato</option>
        <option value="otro">Otro</option>
      </select>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
      <label for="name">Vacunas</label>
      <input type="text" class="form-control" name="vacunas" value="{{$soli->vacunas}}" placeholder="Escribe vacunas mascota">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Descripcion salud</label>
      <input type="text" class="form-control" name="descripcionSalud" value="{{$soli->descripcionSalud}}" placeholder="Escribe descripcion salud">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label>Mascota Esterilizada</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="estadoEsterilizacion" value="si"
                id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Si
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="estadoEsterilizacion" value="no"
                id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                No
            </label>
        </div>
    </div>
</div>

  <button type="submit" class="btn btn-primary">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>


</div>

@endsection