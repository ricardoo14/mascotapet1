@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>meeting para adoptar</h2>
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre mascota</th>
                <th scope="col">Fecha de publicacion</th>
                <th scope="col">usuario</th>
                <th scope="col">estado</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($meetings as $m)
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->publicacion->solicitud->nombreMascota}}</td>
                    <td>{{$m->publicacion->solicitud->created_at}}</td>
                    <td>{{$m->publicacion->solicitud->user->nombre}} {{$m->publicacion->solicitud->user->apellido}}</td>
                    <td>{{$m->publicacion->solicitud->estadoSolicitud->estadoSolicitud}}</td>
                    <td><a href="{{ route('meetings.show', $m->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a></td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection