<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleRemision extends Model
{
    protected $table='detalle_remision';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_remision',
        'id_embalaje',
        'cantidad'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
