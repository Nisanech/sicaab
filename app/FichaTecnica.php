<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    protected $table='ficha_tecnica';

    protected $primaryKey="id_fichatecnica";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'version',
        'fecha_realizada',
        'fecha_aprobacion',
        'registro_sanitario',
        'codigo_barras',
        'id_arte'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
