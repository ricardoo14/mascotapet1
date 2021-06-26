<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{   protected $table = 'publicaciones';
    use HasFactory;

    public function solicitud(){
        return $this->belongsTo('App\Models\Solicitud','idSolicitud','id');
    }
}
