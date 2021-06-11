@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Representantes<a href="representantes/create"><button type="button"
                            class="btn btn-success float-right">Crear representante</button></a></h2>
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
                @foreach ($repre as $r)
                    <tr>
                        <th scope="row">{{ $r->id }}</th>
                        <td>{{ $r->nombre }}</td>
                        <td>{{ $r->apellido }}</td>
                        <td>{{ $r->rut }}</td>
                        <td>{{ $r->email }}</td>
                        <td>
                            {{-- <a href="{{ route('usuarios.show', $r->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a> --}}
                            
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$r->id}}">
                                Eliminar
                              </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-delete-{{$r->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <form action="{{ route('representantes.destroy', $r->id) }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Eliminación de usuarios</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Deseas eliminar al usuario {{$r->nombre}}
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
@endsection
