<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequerimientoCompraFormRequest extends FormRequest
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

            //Campos requeridos en el formulario

            'id_proveedor' => 'required',
            'fecha'        => 'required',
            'id_pago'      => 'required',
            
            // Campos detalle requerimiento de compra
            
            'id_material'  => 'required',
            'cantidad'     => 'required',
            'vlr_unitario' => 'required'
        ];
    }
}
