<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class ProcesoProduccion extends Model
{
    protected $table='procesos_produccion';

    protected $primaryKey="id_procesos";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'proceso',
        'id_tipoproceso'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
