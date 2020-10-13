<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleFichaTecnica extends Model
{
    protected $table='detalle_ficha_tecnica';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_fichatecnica',
        'id_material',
        'id_procesos'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
