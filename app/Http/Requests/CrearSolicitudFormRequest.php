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
            'nombreMascota' => ['required','string','max:30'],
            'ciudad' => ['required','string','max:60'],
            'region' => ['required','string','max:60'],
            'estadoEsterilizacion' => 'required',
            'descripcion' => 'required',
            'idFamiliaBiologica' => 'required',
            'vacunas' => ['required','string','max:20'],
            'descripcionSalud' => 'required',
            'edad' => ['required','integer'],
            'imagen' => ['required','mimes:jpeg,bpm,png'],
        ];
    }
}
