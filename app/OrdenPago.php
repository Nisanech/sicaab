<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
    protected $table='orden_pago';

    protected $primaryKey="id_ordenpago";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha',
        'fecha_vencimiento',
        'estado',
        'id_pago',
        'id_ordencompra'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
