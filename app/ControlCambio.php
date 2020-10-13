<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class ControlCambio extends Model
{
    protected $table='control_cambios';

    protected $primaryKey="id_controlcambios";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha_cambio',
        'descripcion',
        'area_solicitante',
        'id_fichatecnica'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
