<?php

namespace App\Http\Controllers;

use App\Models\Fundacion;
use App\Models\User;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administradores.representantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $fundacion = Fundacion::all();
        return view('administradores.representantes.create',['funda'=>$fundacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $usuario->password = request('password');
        $usuario->idFundacion = request('idFundacion');

        $usuario->save();
        return redirect('/representantes');
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
