@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-black">Publicaciones de fundación</h2>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table rounded table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre de mascota</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publicaciones as $p)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $p->solicitud->nombreMascota }}</td>
                                <td>{{ $p->solicitud->created_at }}</td>
                                <td>{{ $p->solicitud->user->nombre }} {{ $p->solicitud->user->apellido }}</td>
                                <td>{{ $p->solicitud->estadoSolicitud->estadoSolicitud }}</td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-delete-{{ $p->id }}">Eliminar</button></td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $p->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('publicaciones.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminación de publicacion
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Deseas eliminar la solicitud
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-danger" value="Eliminar">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- EndModal -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
