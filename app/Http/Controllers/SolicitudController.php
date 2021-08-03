<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearSolicitudFormRequest;
use App\Models\FamiliaBiologica;
use App\Models\Publicacion;
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
        $familiaBiologica = FamiliaBiologica::all();
        return view('solicitudes.create',['familia'=>$familiaBiologica]);
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
        $solicitud->vacunas = request('vacunas');
        $solicitud->descripcionSalud = request('descripcionSalud');
        $solicitud->estadoEsterilizacion = request('estadoEsterilizacion');
        $solicitud->idEstadoSolicitud = request('idEstadoSolicitud');
        $solicitud->idFamiliaBiologica = request('idFamiliaBiologica');
        $solicitud->idUsuario = auth()->id();
        if($request->hasFile('imagen')){
            $file =$request->imagen;//obtengo la imagen del formulario
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());//la muevo a "imagenes" y obtengo el nombre original
            $solicitud->imagen = $file->getClientOriginalName();//aqui introducimos en la base de datos el nombre del archivo
        }
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
        return view('solicitudes.edit',['soli'=>Solicitud::findOrFail($id)]);
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
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->nombreMascota = $request->get('nombreMascota');
        $solicitud->edad = $request->get('edad');
        $solicitud->ciudad = $request->get('ciudad');
        $solicitud->region = $request->get('region');
        $solicitud->descripcion = $request->get('descripcion');
        $solicitud->idFamiliaBiologica = $request->get('idFamiliaBiologica');
        $solicitud->vacunas = $request->get('vacunas');
        $solicitud->descripcionSalud = $request->get('descripcionSalud');

        if($request->has('imagen')) {
            $image = $request->file('imagen');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/imagenes/'), $filename);
            $solicitud->imagen = $request->file('imagen')->getClientOriginalName();
        }
        
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
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->delete();
        return redirect('/solicitudes');
    }
}
