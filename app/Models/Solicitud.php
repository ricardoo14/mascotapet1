<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User','idUsuario','id');
    }

    public function estadoSolicitud(){
        return $this->belongsTo('App\Models\EstadoSolicitud','idEstadoSolicitud','id');
    }
    public function publicacion(){
        return $this->hasOne('App\Models\Publicacion');
    }

}
