@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Detalle meeting recibido de {{ $m->user->nombre }}</h2>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ url('/gestionmeetings') }}"><button type="button"
                                class="btn btn-primary">Atrás</button></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="p-5"><img class="img-fluid rounded-circle"
                                src="{{ asset('imagenes/' . $m->publicacion->solicitud->imagen) }}"
                                alt="{{ $m->publicacion->solicitud->imagen }}"></div>
                    </div>
                </div>

                <fieldset disabled>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Fecha de solicitud</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->created_at }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Familia biologica</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->familiaBiologica->nombre }}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Edad</label>
                            <input type="text" id="disabledTextInput" value="{{ $m->publicacion->solicitud->edad }}"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="disabledTextInput" class="form-label">Descripcion</label>
                            <input type="text" id="disabledTextInput"
                                value="{{ $m->publicacion->solicitud->descripcion }}"
                                class="text-dark form-control ">{{-- ejemplo de cambio de color --}}
                        </div>
                    </div>

                </fieldset>

                <fieldset disabled>
                    <div class="card text-white bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="disabledTextInput" class="form-label">Motivacion</label>
                                    <textarea rows="4" type="text" id="disabledTextInput" value="{{ $m->motivacion }}"
                                        class="form-control">{{ $m->motivacion }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Nombre</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->nombre }} {{ $m->user->apellido }} {{ $m->user->segundoApellido }}"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Email</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->email }}" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Telefono</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->telefono }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Direccion</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->direccion }}"
                                        class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Region</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->region }}" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="disabledTextInput" class="form-label">Ciudad</label>
                                    <input type="text" id="disabledTextInput"
                                        value="{{ $m->user->ciudad }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="disabledTextInput" class="form-label">Reseña personal</label>
                                    <textarea rows="4" type="text" id="disabledTextInput" class="form-control"
                                        value="{{ $m->user->resenaPersonal }}">{{ $m->user->resenaPersonal }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                @if ($m->idEstadoMeeting != '4')

                    <div class="row">

                        @if($m->idEstadoMeeting !='2')
                        <form action="{{ route('gestionmeetings.update', $m->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="d-none">
                                <div class="col-md-6">
                                    <label>Id estado meeting</label>
                                    <input type="text" name="idEstadoMeeting" class="form-control" value="2">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Aceptar meeting</button>
                            </div>
                        </form>
                        @endif

                        <form action="{{ route('gestionmeetings.update', $m->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="d-none">
                                <div class="col-md-6">
                                    <label>Id estado meeting</label>
                                    <input type="text" name="idEstadoMeeting" class="form-control" value="3">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger">Rechazar meeting</button>
                            </div>
                        </form>

                    </div>
                @endif
            </div>
        @endsection
