<?php

namespace App\Http\Controllers;

use App\Models\Fundacion;
use Illuminate\Http\Request;

class GestionFundacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fundacion= Fundacion::all();
        return view('administradores.fundaciones.index',['funda'=>$fundacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradores.fundaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombreFundacion'=>'required|max:40',
            'rut'=>'required|max:10',
            'comuna'=>'required|max:40',
        ]);

        $fundacion= new Fundacion();
        $fundacion->nombreFundacion = request('nombreFundacion');
        $fundacion->rut = request('rut');
        $fundacion->comuna =request('comuna');
        $fundacion->save();
        return redirect('gestionfundacion')->with('info','Fundacion creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('administradores.fundaciones.show',['fundacion'=>Fundacion::findOrFail($id)]);
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
