<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoSolicitud extends Model
{   
    protected $table = 'estados_solicitud';
    use HasFactory;

    public function solicitud(){
        return $this->hasOne('App\Models\Solicitud');
    }
}
