<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='cargos';

    protected $primaryKey="id_cargo";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'cargo',
        'area'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
