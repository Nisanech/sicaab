<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class IngresoMaterial extends Model
{
    protected $table='ingreso_material';

    protected $primaryKey="id_ingreso";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'num_factura',
        'fecha'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
