<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundacion extends Model
{   
    protected $table = 'fundaciones';
    use HasFactory;

    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function publicaciones(){
        return $this->hasMany('App\Models\Publicacion');
    }
}
