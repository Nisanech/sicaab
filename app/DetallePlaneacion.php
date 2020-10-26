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
        'montaje',
        'tamaño_impresion',
        'alto_pliego',
        'largo_pliego',
        'alto_tamaño',
        'largo_tamaño',
        'total_tamaños',
        'sobrante',
        'total_formatos',
        'total_pliegos',
        'id_planeacion',
        'id_fichatecnica',
        'id_ordencompra'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
