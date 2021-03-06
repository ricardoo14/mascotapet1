@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-black">Fundaciones</h2>
                        @if (session('info'))
                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <a href="gestionfundacion/create"><button type="button" class="btn btn-success float-right">Crear
                                fundacion</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table rounded table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funda as $f)
                            <tr>
                                <th scope="row">{{ $f->id }}</th>
                                <td>{{ $f->nombreFundacion }}</td>
                                <td>{{ $f->rut }}</td>
                                <td><a href="{{ route('gestionfundacion.show', $f->id) }}"><button type="button"
                                            class="btn btn-secondary">Ver</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
