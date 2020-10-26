<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleProduccion extends Model
{
    protected $table='detalle_orden_produccion';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_ordenproduccion',
        'id_procesos',
        'inicio',
        'fin',
        'tam_cortados',
        'tam_impresos_buenos',
        'maculatura_impresion',
        'tam_acabados_buenos',
        'maculatura_acabados',
        'tam_troquelados',
        'tam_refilados',
        'und_descartone',
        'und_pegue',
        'cnt_aprobada',
        'cnt_rechazada',
        'cnt_empacada',
        'responsable'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
