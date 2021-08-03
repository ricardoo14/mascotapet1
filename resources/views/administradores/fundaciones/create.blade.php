@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Crear fundacion </h2>
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

                <form action="/gestionfundacion" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nombre fundacion</label>
                            <input type="text" name="nombreFundacion" class="form-control" placeholder="Nombre fundacion">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Rut</label>
                            <input type="text" name="rut" class="form-control" placeholder="Rut">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Comuna</label>
                            <input type="text" name="comuna" class="form-control" placeholder="Comuna">
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
