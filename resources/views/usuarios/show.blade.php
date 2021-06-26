@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Detalle usuario</h2>
            </div>
            <div class="col-md-6"></div>
        </div>
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{asset($user->avatar)}}"
                            alt="" /></div>
                </div>
                </div>

            <fieldset disabled>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Nombre</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->nombre }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Segundo nombre</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->segundoNombre }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Apellido</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->apellido }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Segundo apellido</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->segundoApellido }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Rut</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->rut }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Fecha de nacimiento</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->fechaDeNacimiento }}"
                            class="form-control" placeholder="Disabled input">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->email }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Telefono</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->telefono }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Direccion</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->direccion }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Ciudad</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->ciudad }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Region</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->region }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Reseña personal</label>
                        <input type="text" id="disabledTextInput" value="{{ $user->resenaPersonal }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

            </fieldset>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('perfil.edit', $use->id) }}"><button type="button"
                            class="btn btn-warning">Editar</button></a>
                </div>
            </div>
        </form>
    </div>
@endsection
