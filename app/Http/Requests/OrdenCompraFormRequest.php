<?php

namespace sicaab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenCompraFormRequest extends FormRequest
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

            'num_orden'       => 'required',
            'fecha_solicitud' => 'required',
            'id_cliente'      => 'required',
            'id_pago'         => 'required',

            // Campos detalle orden de compra

            'cantidad'     => 'required',
            'vlr_unitario' => 'required',
            'id_producto'  => 'required'
        ];
    }
}
