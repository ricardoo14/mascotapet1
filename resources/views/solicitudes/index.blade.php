@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Solicitudes de Usuario <a href="solicitudes/create"><button type="button" class="btn btn-success float-right">Crear solicitud</button></a></h2>
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre mascota</th>
                <th scope="col">Fecha de solicitud</th>
                <th scope="col">estado</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solici as $s)
                <tr>
                    <th scope="row">{{$s->id}}</th>
                    <td>{{$s->nombreMascota}}</td>
                    <td>{{$s->created_at}}</td>
                    <td>{{$s->idEstadoSolicitud.nombre}}</td>
                    <td><a href="{{ route('solicitudes.show', $s->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection