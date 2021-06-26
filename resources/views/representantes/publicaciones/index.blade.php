@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Todas las publicaciones</h2>
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
                <th scope="col">usuario</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publicaciones as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection