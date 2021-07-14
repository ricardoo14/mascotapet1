@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Meetings recibidos</h2>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nombre de mascota</th>
                <th scope="col">Fecha de solicitud</th>
                <th scope="col">Adoptador</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Estado</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($meetings as $m)
                <tr>
                    <th scope="row"></th>
                    <td>{{$m->publicacion->solicitud->nombreMascota}}</td>
                    <td>{{$m->created_at}}</td>
                    <td>{{$m->user->nombre}} {{$m->user->apellido}}</td>
                    <td>{{$m->user->ciudad}}</td>
                    <td>{{$m->estadoMeeting->estadoMeeting}}</td>
                    <td><a href="{{ route('gestionmeetings.show', $m->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a></td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection