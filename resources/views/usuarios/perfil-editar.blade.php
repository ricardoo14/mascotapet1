@extends('layouts.plantilla')
@section('content')



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
        <form action="{{ route('perfil.update', $use->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Cambiar foto
                            <input type="file" name="avatar" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Editar perfil {{ $use->nombre }} {{ $use->apellido }}
                        </h5>
                        <input type="text" class="form-control" name="resenaPersonal" value="{{ $use->resenaPersonal }}"
                            placeholder="Reseña personal">

                        {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Datos personales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Datos contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/perfil') }}"><button type="button" class="btn btn-primary">Atrás</button></a>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="profile-work">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                    <div class="container">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" value="{{ $use->nombre }}"
                                        placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="segundoNombre">Segundo nombre</label>
                                    <input type="text" class="form-control" name="segundoNombre"
                                        value="{{ $use->segundoNombre }}" placeholder="Escribe tu segundo nombre">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" value="{{ $use->apellido }}"
                                        placeholder="Escribe tu apellido">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="segundoApellido">Segundo apellido</label>
                                    <input type="text" class="form-control" name="segundoApellido"
                                        value="{{ $use->segundoApellido }}" placeholder="Escribe tu segundo apellido">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="rut">Rut</label>
                                    <input type="text" class="form-control" name="rut" value="{{ $use->rut }}"
                                        placeholder="Escribe tu rut" readonly>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="fechaDeNacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fechaDeNacimiento"
                                        value="{{ $use->fechaDeNacimiento }}"
                                        placeholder="Escribe tu fecha de nacimiento" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" name="region" value="{{ $use->region }}"
                                        placeholder="Escribe tu region">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" value="{{ $use->ciudad }}"
                                        placeholder="Escribe tu ciudad">
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $use->email }}"
                                        placeholder="Escribe tu email" readonly>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" class="form-control" name="telefono" value="{{ $use->telefono }}"
                                        placeholder="Escribe tu telefono">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" name="direccion"
                                        value="{{ $use->direccion }}" placeholder="Escribe tu direccion">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
