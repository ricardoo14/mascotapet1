@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-black">Mis solicitudes de meetings</h2>
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
                            <th scope="col">Fecha de solicitud</th>
                            <th scope="col">Rescatador</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meetings as $m)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $m->publicacion->solicitud->nombreMascota }}</td>
                                <td>{{ $m->created_at }}</td>
                                <td>{{ $m->publicacion->solicitud->user->nombre }}
                                    {{ $m->publicacion->solicitud->user->apellido }}
                                </td>
                                <td>{{ $m->estadoMeeting->estadoMeeting }}</td>
                                <td>
                                    <a href="{{ route('meetings.show', $m->id) }}"><button type="button"
                                            class="btn btn-secondary">Ver</button></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-delete-{{ $m->id }}">Eliminar</button>
                                    @if ($m->idEstadoMeeting == '2' || $m->idEstadoMeeting == '4')
                                        <a href="{{ route('datosr', $m->id) }}"><button type="button"
                                                class="btn btn-success">Datos del Rescatador</button></a>
                                    @endif
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $m->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('meetings.destroy', $m->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminación de solicitud de
                                                    meeting</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Deseas eliminar la solicitud de meeting
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
