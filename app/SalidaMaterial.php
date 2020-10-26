<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class SalidaMaterial extends Model
{
    protected $table='salida_material';

    protected $primaryKey="id_salida";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha',
        'id_ordenproduccion'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
