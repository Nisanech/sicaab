<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class RequerimientoCompra extends Model
{
    protected $table='requerimiento_compra';

    protected $primaryKey="id_requerimiento";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha',
        'estado',
        'id_proveedor',
        'id_pago'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
