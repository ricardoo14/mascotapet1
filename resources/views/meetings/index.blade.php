@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Mis solicitudes de meetings</h2>
            </div>
            <div class="col-md-6"></div>
        </div>

        <table class="table table-hover">
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
                        <td><a href="{{ route('meetings.show', $m->id) }}"><button type="button"
                                    class="btn btn-secondary">Ver</button></a>
                            @if ($m->idEstadoMeeting == '2')
                                <a href="{{ route('datosr', $m->id) }}"><button type="button"
                                    class="btn btn-success">Datos del Rescatador</button></a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
