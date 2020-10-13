<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class DetalleProduccion extends Model
{
    protected $table='detalle_produccion';

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'id_ordenproduccion',
        'id_procesos',
        'inicio',
        'fin',
        'tamaños_cortados',
        'tamaños_impresos_buenos',
        'maculatura_impresion',
        'tamaños_acabados_buenos',
        'maculatura_acabados',
        'tamaños_troquelados',
        'tamaños_refilados',
        'unidades_descartone',
        'unidades_pegue',
        'cantidad_aprobada',
        'cantidad_rechazada',
        'cantidad_entregada',
        'responsable'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
