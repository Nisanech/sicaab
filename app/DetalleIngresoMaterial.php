<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleIngresoMaterial extends Model
{
    protected $table='detalle_ingreso_material';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_ingreso',
        'id_material',
        'cantidad',
        'vlr_compra'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
