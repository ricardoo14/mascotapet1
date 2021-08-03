<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditarPerfilFormRequest;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('usuarios.perfil',['use'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    {   $user = Auth::user();
        return view('usuarios.perfil-editar',['id'=>Auth::user()->$id],['use'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarPerfilFormRequest $request, $id)
    {
        $user = User::find($id);
        $user->nombre = $request->get('nombre'); //aqui estaria sacando los datos del formulario edit
        $user->segundoNombre = $request->get('segundoNombre');
        $user->apellido = $request->get('apellido');
        $user->segundoApellido = $request->get('segundoApellido');
        $user->telefono = $request->get('telefono');
        $user->direccion = $request->get('direccion');
        $user->ciudad = $request->get('ciudad');
        $user->region = $request->get('region');
        $user->resenaPersonal = $request->get('resenaPersonal');

        if($request->has('avatar')) {
            $image = $request->file('avatar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images/'), $filename);
            $user->avatar = $request->file('avatar')->getClientOriginalName();
        }
        
        $user->update(); 

        return redirect('/perfil');
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
