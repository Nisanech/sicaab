<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleSalidaMaterial extends Model
{
    protected $table='detalle_salida_material';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_salida',
        'id_material',
        'cantidad'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
