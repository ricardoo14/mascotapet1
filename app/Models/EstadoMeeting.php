<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoMeeting extends Model
{   
    protected $table = 'estados_meeting';
    use HasFactory;
    
    public function meeting(){
        return $this->hasOne('App\Models\Meeting');
    }
}
