@extends('layouts.plantilla')
@section('content')
<div class="container">
  <div class="card bg-light">
    <div class="card-header">
    <div class="row">
        <div class="col-md-11">
            <h2 class="text-black">Gestión de solicitudes de publicación</h2>
        </div>
        <div class="col-md-1"></div>
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
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solici as $s)
                <tr>
                    <th scope="row"></th>
                    <td>{{$s->nombreMascota}}</td>
                    <td>{{$s->created_at}}</td>
                    <td>{{$s->user->nombre}}</td>
                    <td>{{$s->estadoSolicitud->estadoSolicitud}}</td>
                    <td><a href="{{ route('solicitudr.show', $s->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                      @if($s->estadoSolicitud != '2')
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$s->id}}">
                            Eliminar
                          </button>
                          @endif
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="modal-delete-{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <form action="{{ route('solicitudr.destroy', $s->id) }}" method="POST"> 
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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