<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table='ordenes_compra';

    protected $primaryKey="id_ordencompra";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'num_orden',
        'fecha_solicitud',
        'fecha_entrega',
        'estado',
        'id_cliente'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
