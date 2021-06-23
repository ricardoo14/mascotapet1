<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearSolicitudFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombreMascota' => 'required',
            'ciudad' => 'required',
            'region' => 'required',
            'estadoEsterilizacion' => 'required',
            'descripcion' => 'required',
            'familiaBiologica' => 'required',
            'vacunas' => 'required',
            'descripcionSalud' => 'required',
            'edad' => 'required',
            'imagen' => 'mimes:jpeg,bpm,png'
        ];
    }
}
