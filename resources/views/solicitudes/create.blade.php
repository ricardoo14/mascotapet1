@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear solicitud </h2>
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

        <form action="/solicitudes" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre mascota</label>
                    <input type="text" name="nombreMascota" class="form-control" placeholder="Nombre mascota">
                </div>
                <div class="form-group col-md-6">
                    <label>Edad mascota</label>
                    <input type="text" name="edad" class="form-control" placeholder="Edad">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                </div>
                <div class="form-group col-md-6">
                    <label>Region</label>
                    <input type="text" name="region" class="form-control" placeholder="Region">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                </div>
                <div class="form-group col-md-6">
                    <label>Familia biologica</label>
                <select class="form-control" name="familiaBiologica" >
                    <option value="" selected>Seleccione familia biologica</option>
                    <option value="perro">Perro</option>
                    <option value="gato">Gato</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Vacunas</label>
                    <input type="text" name="vacunas" class="form-control" placeholder="Vacunas">
                </div>
                <div class="form-group col-md-6">
                    <label>Descripcion salud</label>
                    <input type="text" name="descripcionSalud" class="form-control" placeholder="Descripcion salud">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Mascota Esterilizada</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoEsterilizacion" value="si"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estadoEsterilizacion" value="no"
                            id="flexRadioDefault2" {{-- checked --}}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                </div>
           
                <div class="form-group col-md-6">
                    <label >Imagen</label>
                    <input type="file" name="imagen" class="form-control"> 
                 </div>
            </div>

            <div class="invisible">
                <label>estado</label>
                <input type="text" name="idEstadoSolicitud" class="form-control" value="1" placeholder="Vacunas">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>

    </div>

@endsection
