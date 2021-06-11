@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Administradores<a href="administradores/create"><button type="button"
                    class="btn btn-success float-right">Crear administrador</button></a></h2>
                    @if (session('info'))
                    <div class="alert alert-success">
                      <strong>{{session('info')}}</strong>
                    </div>
                        @endif  
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Email</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($use as $u)
                    <tr>
                        <th scope="row">{{ $u->id }}</th>
                        <td>{{ $u->nombre }}</td>
                        <td>{{ $u->apellido }}</td>
                        <td>{{ $u->rut }}</td>
                        <td>{{ $u->email }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
