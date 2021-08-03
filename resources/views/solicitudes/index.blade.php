@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-7 ">
                        <h2 class="text-black">Solicitudes de publicacion</h2>
                    </div>
                    <div class="col-md-5">
                      <a href="solicitudes/create">
                      <button type="button" class="btn btn-success float-right">Crear
                          solicitud</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table rounded table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre mascota</th>
                            <th scope="col">Fecha de solicitud</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solici as $s)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $s->nombreMascota }}</td>
                                <td>{{ $s->created_at }}</td>
                                <td>{{ $s->estadoSolicitud->estadoSolicitud }}</td>
                                <td>
                                    <a href="{{ route('solicitudes.show', $s->id) }}"><button type="button"
                                            class="btn btn-secondary">Ver</button></a>
                                    @if ($s->idEstadoSolicitud == '1')
                                        <a href="{{ route('solicitudes.edit', $s->id) }}"><button type="button"
                                                class="btn btn-warning">Editar</button></a>
                                    @endif
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-delete-{{ $s->id }}">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $s->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('solicitudes.destroy', $s->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminación de solicitud</h5>
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
