<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        
        return view('representantes.publicaciones.index',['publicaciones'=>Publicacion::all()->where('idFundacion',auth()->user()->idFundacion)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('representantes.publicaciones.create',['p'=>Solicitud::findOrFail($id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $publicacion = new Publicacion();
        $publicacion->idSolicitud = request('idSolicitud');
        /* $publicacion->idFundacion = request('idFundacion'); */
        $publicacion->idFundacion = Auth::user()->idFundacion;
        $publicacion->idEstadoPublicacion = request('idEstadoPublicacion');
        $publicacion->save();

        $solicitud = Solicitud::findOrfail(request('idSolicitud'));
        $solicitud->idEstadoSolicitud = 2;
        $solicitud->update();

        return redirect('publicaciones');
        
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
        /* $publicacion = Publicacion::findOrfail($id);
        $publicacion = new Publicacion();
        $publicacion->idSolicitud = $request->get('id');
        $publicacion->update();
        return redirect('publicaciones'); */
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
