<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Remision extends Model
{
    protected $table='remision';

    protected $primaryKey="id_remision";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'cnt_entregada',
        'fecha_entrega',
        'estado',
        'id_ordenproduccion'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
