@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-black">Usuarios</h2>
                    </div>
                    <div class="col-md-6">
                        <!-- SEARCH FORM -->
                        <form class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" name="search" type="search"
                                    placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <h6>
                    @if ($search)
                        <div class="alert alert-primary" role="alert">
                            Los resultados de tu busqueda '{{ $search }}' son:
                        </div>
                    @endif
                </h6>
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
                            <td>
                                <a href="{{ route('usuarios.show', $u->id) }}"><button type="button"
                                        class="btn btn-secondary">Ver</button></a>

                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-{{ $u->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('usuarios.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
    @endsection
