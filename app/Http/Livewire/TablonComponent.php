<?php

namespace App\Http\Livewire;

use App\Models\FamiliaBiologica;
use Livewire\Component;
use App\Models\Publicacion;

class TablonComponent extends Component
{   

    public $publicaciones = "";
    public function render()
    {   
    
        return view('livewire.tablon-component',[
            "familiasBiologicas"=>FamiliaBiologica::all(),
            "publicaciones"=>$this->publicaciones
        ]);
    }
    public function listarPublicaciones($idFamiliaBiologica){
        
        $this->publicaciones = Publicacion::where("idFamiliaBiologica",$idFamiliaBiologica)->where("idEstadoPublicacion",1)->get();
        
    }
}
