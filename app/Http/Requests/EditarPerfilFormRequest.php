<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarPerfilFormRequest extends FormRequest
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
            'nombre' => ['required', 'string', 'max:40'],
            'segundoNombre' => ['required', 'string', 'max:40'],
            'apellido' => ['required', 'string', 'max:40'],
            'segundoApellido' => ['required', 'string', 'max:40'],
            'telefono' => ['required', 'string', 'max:12'],
            'direccion' => ['required', 'string', 'max:40'],
            'ciudad' => ['required', 'string', 'max:60'],
            'region' => ['required', 'string', 'max:60'],
            'resenaPersonal' => ['required', 'string', 'max:255'],
        ];
    }
}
