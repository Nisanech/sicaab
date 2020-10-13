<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class PlaneacionProduccion extends Model
{
    protected $table='planeaciones_produccion';

    protected $primaryKey="id_planeacion";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'inicio',
        'entrega'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
