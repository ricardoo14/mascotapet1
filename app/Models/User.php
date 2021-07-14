<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'segundoNombre',
        'apellido',
        'segundoApellido',
        'rut',
        'fechaDeNacimiento',
        'email',
        'telefono',
        'direccion',
        'ciudad',
        'region',
        'resenaPersonal',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function fundacion(){
        return $this->belongsTo('App\Models\Fundacion','idFundacion','id');
    }
    
    public function solicitudes(){
        return $this->hasMany('App\Models\Solicitud');
    }
    public function meetings(){
        return $this->hasMany('App\Models\Meeting');
    }  
}
