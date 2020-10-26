<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
    protected $table='estado_pedido';

    public $timestamps=false;

    protected $fillable=[
        'id_ordencompra',
        'id_ordenproduccion'
    ];

    protected $guarderd=[

    ];
}
