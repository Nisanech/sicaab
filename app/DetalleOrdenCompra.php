<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleOrdenCompra extends Model
{
    protected $table='detalle_orden_compra';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_ordencompra',
        'id_producto',
        'cantidad',
        'vlr_unitario'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
