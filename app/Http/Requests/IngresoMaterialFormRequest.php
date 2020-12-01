<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoMaterialFormRequest extends FormRequest
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

            'num_factura'      => 'required | max:10',
            'fecha'            => 'required',
            
            'id_material'      => 'required',
            'cantidad'         => 'required',
            'vlr_compra'       => 'required'

        ];
    }
}
