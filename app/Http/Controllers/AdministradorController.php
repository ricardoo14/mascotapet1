<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministradorFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $usuario = User::role('administrador')->get();
        return view('administradores.admines.index',['use'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradores.admines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdministradorFormRequest $request)
    {
        $usuario = new User();
        $usuario->nombre = request('nombre');
        $usuario->segundoNombre = request('segundoNombre');
        $usuario->apellido = request('apellido');
        $usuario->segundoApellido = request('segundoApellido');
        $usuario->segundoApellido = request('segundoApellido');
        $usuario->rut = request('rut');
        $usuario->fechaDeNacimiento = request('fechaDeNacimiento');
        $usuario->email = request('email');
        $usuario->telefono = request('telefono');
        $usuario->direccion = request('direccion');
        $usuario->ciudad = request('ciudad');
        $usuario->region = request('region');
        $usuario->resenaPersonal = request('resenaPersonal');
        $usuario->password = bcrypt( request('password'));
        $usuario->assignRole('Administrador');

        $usuario->save();
        return redirect('/administradores')->with('info','Administrador creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
