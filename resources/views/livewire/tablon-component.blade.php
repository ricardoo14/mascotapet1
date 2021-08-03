<div>

    <div class="row">
        <div class="form-group col-md-6">
        <select class="form-control" name="idFamiliasBiologicas"
            wire:change='listarPublicaciones($event.target.value)'>
            <option value="default" selected>Seleccione familia biologica</option>
            @foreach ($familiasBiologicas as $f)
                <option value="{{ $f->id }}">{{ $f->nombre }}</option>

            @endforeach
        </select>
        </div>
    </div>

    
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @if ($publicaciones)
                @foreach ($publicaciones as $p)
                    <div class="col">
                        <div class="card border border-info" style="width:300px;">
                            <img src="{{ asset('imagenes/' . $p->solicitud->imagen) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->solicitud->nombreMascota }}</h5>
                                <p class="card-text">{{ $p->solicitud->descripcion }}</p>
                                <p class="card-text">{{ $p->solicitud->ciudad }}</p>
                                
                                <a href="{{ route('tablon.show', $p->id) }}"><button type="button"
                                        class="btn btn-secondary">Adoptar</button></a>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    
</div>
