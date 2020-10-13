<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Remision extends Model
{
    protected $table='remisiones';

    protected $primaryKey="id_remision";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'cantidad_total',
        'fecha_entrega'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
