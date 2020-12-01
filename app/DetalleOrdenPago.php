<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleOrdenPago extends Model
{
    protected $table='detalle_orden_pago';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_ordenpago',
        'id_producto',
        'vlr_unitario',
        'cantidad'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
