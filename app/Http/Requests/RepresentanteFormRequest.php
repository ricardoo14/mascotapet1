<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepresentanteFormRequest extends FormRequest
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
            'idFundacion' => 'required',
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
            
        ];
    }
}
