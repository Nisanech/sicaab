<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Embalaje extends Model
{
    protected $table='embalaje';

    protected $primaryKey="id_embalaje";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'tipo'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
