<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class OrdenProduccion extends Model
{
    protected $table='ordenes_produccion';

    protected $primaryKey="id_ordenproduccion";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha_apertura',
        'fecha_cierre',
        'estado',
        'id_planeacion'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
