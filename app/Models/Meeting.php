<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{   
    protected $table = 'meetings';
    use HasFactory;

    public function estadoMeeting(){
        return $this->belongsTo('App\Models\EstadoMeeting','idEstadoMeeting','id');
    }
    
    public function publicacion(){
        return $this->belongsTo('App\Models\Publicacion','idPublicacion','id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','idUsuario','id');
    }
}
