@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Mascotas adoptables</h2>
        </div>
        <div class="col-md-6"></div>
    </div>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
    @foreach($publicaciones as $p)
    <div class="col">
    <div class="card" style="width:300px;" >
        <img src="{{ asset('imagenes/' . $p->solicitud->imagen) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$p->Solicitud->nombreMascota}}</h5>
          <p class="card-text">{{$p->Solicitud->descripcion}}</p>
          <p class="card-text">{{$p->Solicitud->ciudad}}</p>
          <a href="{{ route('tablon.show', $p->id) }}"><button type="button" class="btn btn-secondary">Adoptar</button></a>
        </div>
      </div>
    </div>
     @endforeach 
    
    </div> 
</div>
@endsection