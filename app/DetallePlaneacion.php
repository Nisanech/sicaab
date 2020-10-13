<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetallePlaneacion extends Model
{
    protected $table='detalle_planeacion';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'tamaño_plancha',
        'medida_pliego',
        'medida_corte',
        'tamaño_impresion',
        'tamaños',
        'sobrante',
        'total_tamaños',
        'total_pliegos',
        'id_planeacion',
        'id_fichatecnica',
        'id_ordencompra'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
