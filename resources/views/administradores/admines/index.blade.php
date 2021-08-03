@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">

                    <div class="col-md-6">
                        <h2 class="text-black">Administradores</h2>
                        @if (session('info'))
                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <a href="administradores/create"><button type="button"
                                    class="btn btn-success float-right">Crear administrador</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table rounded table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Email</th>

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

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
