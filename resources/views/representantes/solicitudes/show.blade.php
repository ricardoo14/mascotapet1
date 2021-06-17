@extends('layouts.plantilla')
@section ('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$s->nombreMascota}}</h1> 
    <p class="medium">Fecha de publicacion: {{$s->created_at}}</p>
</div>
</div>
<div class="container">
    
<p class="lead">Familia Biologica: {{$s->familiaBiologica}}</p>
<p class="lead">Esterilizado: {{$s->estadoEsterilizacion}}</p>
<p class="lead">Edad (Meses): {{$s->edad}}</p>
<p class="lead">Vacunas: {{$s->vacunas}}</p>
<p class="lead">Descripcion Salud: {{$s->descripcionSalud}}</p>
<p class="lead">Descripcion: {{$s->descripcion}}</p>
<p class="lead">Ciudad: {{$s->ciudad}}</p>
<p class="lead">Region: {{$s->region}}</p>
<p class="lead">Region: {{$s->idEstadoSolicitud}}</p>

</div>
@endsection