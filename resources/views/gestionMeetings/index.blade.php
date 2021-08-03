@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-black">Meetings recibidos</h2>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table rounded table-hover table-striped table-dark">
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
                        @foreach ($meetings as $m)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $m->publicacion->solicitud->nombreMascota }}</td>
                                <td>{{ $m->created_at }}</td>
                                <td>{{ $m->user->nombre }} {{ $m->user->apellido }}</td>
                                <td>{{ $m->user->ciudad }}</td>
                                <td>{{ $m->estadoMeeting->estadoMeeting }}</td>
                                <td><a href="{{ route('gestionmeetings.show', $m->id) }}"><button type="button"
                                            class="btn btn-secondary">Ver</button></a>
                                    @if ($m->idEstadoMeeting == '2')

                                        <form action="{{ route('adopcion.update', $m->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="d-none">
                                                <div class="col-md-6">
                                                    <label>Id estado meeting</label>
                                                    <input type="text" name="idEstadoMeeting" class="form-control"
                                                        value="4">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Id Publicacion</label>
                                                    <input type="text" name="idPublicacion" class="form-control"
                                                        value="{{ $m->idPublicacion }}">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success">Adopcion exitosa</button>

                                        </form>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
