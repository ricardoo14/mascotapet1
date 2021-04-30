<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'segundoNombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'segundoApellido' => ['required', 'string', 'max:255'],
            'rut' => ['required', 'string', 'max:255'],
            'fechaDeNacimiento' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'resenaPersonal' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'segundoNombre' => $data['segundoNombre'],
            'apellido' => $data['apellido'],
            'segundoApellido' => $data['segundoApellido'],
            'rut' => $data['rut'],
            'fechaDeNacimiento' => $data['fechaDeNacimiento'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad'],
            'region' => $data['region'],
            'resenaPersonal' => $data['resenaPersonal'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
