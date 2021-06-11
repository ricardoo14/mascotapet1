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
            'nombre' => ['required', 'string', 'max:40'],
            'segundoNombre' => ['required', 'string', 'max:40'],
            'apellido' => ['required', 'string', 'max:40'],
            'segundoApellido' => ['required', 'string', 'max:40'],
            'rut' => ['required', 'string', 'max:10','cl_rut'],
            'fechaDeNacimiento' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'max:12'],
            'direccion' => ['required', 'string', 'max:40'],
            'ciudad' => ['required', 'string', 'max:60'],
            'region' => ['required', 'string', 'max:60'],
            'resenaPersonal' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar'=>['sometimes','image','mimes:jpg,jpeg,bmp,svg,png'],
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
        

        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath, $avatarname);
            $user= User::create([
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
                'avatar' => '/images/' . $avatarname,
            ]);
            $user->assignRole('Usuario');

            return $user;
        }

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
