@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Fundaciones<a href="gestionfundacion/create"><button type="button" class="btn btn-success float-right">Crear fundacion</button></a></h2>
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Rut</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($funda as $f)
                <tr>
                    <th scope="row">{{$f->id}}</th>
                    <td>{{$f->nombreFundacion}}</td>
                    <td>{{$f->rut}}</td>
                    <td><a href="{{ route('gestionfundacion.show', $f->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection