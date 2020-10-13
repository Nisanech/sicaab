<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleRequerimientoCompra extends Model
{
    protected $table='detalle_requerimiento_compra';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_requerimiento',
        'id_material',
        'cantidad',
        'vlr_unitario'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
