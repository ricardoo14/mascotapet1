<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaBiologica extends Model
{   
    protected $table = 'familias_biologica';
    use HasFactory;

    public function solicitud(){
        return $this->hasMany('App\Models\Solicitud');
    }
}
