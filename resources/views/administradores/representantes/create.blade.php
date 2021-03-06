@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Crear representante</h2>
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

                <form action="/representantes" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Fundacion</label>
                            <select name="idFundacion" class="form-control">
                                <option value="" selected>Elige una fundacion para el representante</option>
                                @foreach ($funda as $f)
                                    <option value="{{ $f->id }}">{{ $f->nombreFundacion }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Segundo nombre</label>
                            <input type="text" name="segundoNombre" class="form-control" placeholder="Segundo nombre">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Segundo Apellido</label>
                            <input type="text" name="segundoApellido" class="form-control" placeholder="Segundo apellido">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Rut</label>
                            <input type="text" name="rut" class="form-control" placeholder="Rut">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de nacimiento</label>
                            <input placeholder="fecha de nacimiento" type="date" class="form-control"
                                name="fechaDeNacimiento">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefono</label>
                            <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Direccion</label>
                            <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Region</label>
                            <input type="text" name="region" class="form-control" placeholder="Region">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Rese??a personal</label>
                            <input type="text" name="resenaPersonal" class="form-control" placeholder="Rese??a personal">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contrase??a</label>
                            <input type="password" name="password" class="form-control" placeholder="Contrase??a">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmar Contrase??a</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirme Contrase??a">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
