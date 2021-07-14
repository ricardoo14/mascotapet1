@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Publicaciones de fundación</h2>
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
                
            </tr>
        </thead>
        <tbody>
            @foreach($publicaciones as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->solicitud->nombreMascota}}</td>
                    <td>{{$p->solicitud->created_at}}</td>
                    <td>{{$p->solicitud->user->nombre}} {{$p->solicitud->user->apellido}}</td>
                    <td>{{$p->solicitud->estadoSolicitud->estadoSolicitud}}</td>
                    
                    
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection