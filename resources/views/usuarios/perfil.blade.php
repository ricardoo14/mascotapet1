@extends('layouts.plantilla')
@section('content')

     

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="" />
                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Perfil {{ $use->nombre }} {{ $use->apellido }}
                        </h5>
                        <h6>
                            "{{ $use->resenaPersonal }}"
                        </h6>
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
                    <a href="{{ route('perfil.edit', $use->id) }}"><button type="button"
                        class="btn btn-warning">Editar</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    {{-- <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->nombre }} {{ $use->segundoNombre }} {{ $use->apellido }}
                                        {{ $use->segundoApellido }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Rut</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->rut }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Fecha de nacimiento</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->fechaDeNacimiento }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Region</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->region }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ciudad</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->ciudad }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Telefono</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->telefono }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Direccion</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $use->direccion }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
