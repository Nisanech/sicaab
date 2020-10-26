<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class EstadoProduccion extends Model
{
    protected $table='estado_produccion';

    protected $primaryKey="id_estadoproduccion";

    public $timestamps=false;

    protected $fillable=[
        'estado'
    ];

    protected $guarderd=[

    ];
}
