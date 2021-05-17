<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <section class="register-clean">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="sr-only">Register Form</h2>
            <div class="illustration"><i class="fas fa-paw"></i></div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="nombre" placeholder="nombre" type="text"
                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <input id="segundoNombre" placeholder="segundo nombre" type="text"
                        class="form-control @error('segundoNombre') is-invalid @enderror" name="segundoNombre"
                        value="{{ old('segundoNombre') }}" required autocomplete="segundoNombre" autofocus>
                    @error('segundoNombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="apellido" placeholder="apellido" type="text"
                        class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                        value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="segundoApellido" placeholder="segundo apellido" type="text"
                        class="form-control @error('segundoApellido') is-invalid @enderror" name="segundoApellido"
                        value="{{ old('segundoApellido') }}" required autocomplete="segundoApellido" autofocus>
                    @error('segundoApellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="rut" placeholder="rut" type="text"
                        class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{ old('rut') }}"
                        required autocomplete="rut" autofocus>
                    @error('rut')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="fechaDeNacimiento" placeholder="fecha de nacimiento" type="date"
                        class="form-control @error('fechaDeNacimiento') is-invalid @enderror" name="fechaDeNacimiento"
                        value="{{ old('fechaDeNacimiento') }}" required autocomplete="fechaDeNacimiento" autofocus>
                    @error('fechaDeNacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="email" placeholder="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="telefono" placeholder="telefono" type="text"
                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                        value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <input id="direccion" placeholder="direccion" type="text"
                        class="form-control @error('direccion') is-invalid @enderror" name="direccion"
                        value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <input id="ciudad" placeholder="ciudad" type="text"
                        class="form-control @error('ciudad') is-invalid @enderror" name="ciudad"
                        value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>
                    @error('ciudad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <input id="region" placeholder="region" type="text"
                        class="form-control @error('region') is-invalid @enderror" name="region"
                        value="{{ old('region') }}" required autocomplete="region" autofocus>
                    @error('region')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group ">
                <input id="resenaPersonal" placeholder="reseña personal" type="text"
                    class="form-control @error('resenaPersonal') is-invalid @enderror" name="resenaPersonal"
                    value="{{ old('resenaPersonal') }}" required autocomplete="resenaPersonal" autofocus>
                @error('resenaPersonal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input id="password" placeholder="contraseña" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <input id="password-confirm" placeholder="confirmar contraseña" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row justify-content-center">
            <div class="form-group col-md-10">
                <label >Imagen</label>
                <input type="file" name="imagen" class="form-control"> 
             </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-5">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
