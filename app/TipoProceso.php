<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class TipoProceso extends Model
{
    protected $table='tipo_procesos';

    protected $primaryKey="id_tipoproceso";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'tipo'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
