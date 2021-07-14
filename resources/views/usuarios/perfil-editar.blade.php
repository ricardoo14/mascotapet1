@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Editar Perfil de usuario</h2>
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
            <div class="col-md-6"></div>
        </div>
        <form action="{{ route('perfil.update', $use->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $use->nombre }}"
                        placeholder="Escribe tu nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="segundoNombre">Segundo nombre</label>
                    <input type="text" class="form-control" name="segundoNombre" value="{{ $use->segundoNombre }}"
                        placeholder="Escribe tu segundo nombre">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="{{ $use->apellido }}"
                        placeholder="Escribe tu apellido">
                </div>
                <div class="form-group col-md-6">
                    <label for="segundoApellido">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundoApellido" value="{{ $use->segundoApellido }}"
                        placeholder="Escribe tu segundo apellido">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rut">Rut</label>
                    <input type="text" class="form-control" name="rut" value="{{ $use->rut }}"
                        placeholder="Escribe tu rut" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="fechaDeNacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fechaDeNacimiento" value="{{ $use->fechaDeNacimiento }}"
                        placeholder="Escribe tu fecha de nacimiento" readonly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $use->email }}"
                        placeholder="Escribe tu email" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="{{ $use->telefono }}"
                        placeholder="Escribe tu telefono">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="{{ $use->direccion }}"
                        placeholder="Escribe tu direccion">
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="{{ $use->ciudad }}"
                        placeholder="Escribe tu ciudad">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="region">Region</label>
                    <input type="text" class="form-control" name="region" value="{{ $use->region }}"
                        placeholder="Escribe tu region">
                </div>
                <div class="form-group col-md-6">
                    <label for="resenaPersonal">Reseña personal</label>
                    <input type="text" class="form-control" name="resenaPersonal" value="{{ $use->resenaPersonal }}"
                        placeholder="Reseña personal">
                </div>
            </div>

            <div class="form-group col-md-12">
                <input id="avatar" placeholder="Ingrese avatar" type="file"
                    class="form-control" name="avatar">
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>

    </div>
@endsection
