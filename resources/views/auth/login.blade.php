@extends('layouts.plantilla')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="login-clean">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fas fa-dog"></i></div>

            <div class="form-group "><input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                
            </div>

            <div class="form-group"><input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Recordarme') }}
                </label>
            </div>

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button>
       
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Te olvidaste de tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
        </form>
    </section>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
@endsection