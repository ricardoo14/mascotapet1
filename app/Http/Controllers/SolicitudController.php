<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearSolicitudFormRequest;
use App\Models\Solicitud;
use Illuminate\Http\Request;


class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('solicitudes.index',['solici'=>Solicitud::all()->where('idUsuario',auth()->id())]);
        //con esta condicion where nos mostrara solo nuestras solicitudes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearSolicitudFormRequest $request)
    {
        //
        $solicitud = new Solicitud();
        $solicitud->nombreMascota = request('nombreMascota');
        $solicitud->edad = request('edad');
        $solicitud->ciudad = request('ciudad');
        $solicitud->region = request('region');
        $solicitud->descripcion = request('descripcion');
        $solicitud->familiaBiologica = request('familiaBiologica');
        $solicitud->vacunas = request('vacunas');
        $solicitud->descripcionSalud = request('descripcionSalud');
        $solicitud->estadoEsterilizacion = request('estadoEsterilizacion');
        $solicitud->idEstadoSolicitud = request('idEstadoSolicitud');
        $solicitud->idUsuario = auth()->id();
        $solicitud->save();
        return redirect('solicitudes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('solicitudes.show',['s'=>Solicitud::findOrFail($id)]);
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
        $solicitud = Solicitud::find($id);
        $solicitud->idEstadoSolicitud = $request->get('idEstadoSolicitud');
        $solicitud->update();
        return redirect('/solicitudes');
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
    public function cambio(Request $request, $id)
    {   
        
        
    }
}
