<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorFormRequest extends FormRequest
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
            
            // Campos requeridos en el formulario

            'nit'              => 'required | max:45',
            'razon_social'     => 'required | max:120',
            'direccion'        => 'required | max:45',
            'telefono'         => 'required | max:20',
            'correo'           => 'required | max:120',
            'persona_contacto' => 'required | max:120',
            'tipo'             => 'required | max:20',
            'id_pago'          => 'required',
        ];
    }
}
