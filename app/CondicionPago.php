<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class CondicionPago extends Model
{
    protected $table = 'condicion_pago';

    protected $primaryKey = "id_pago";

    public $timestamps = false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'tipo',
        'plazo'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd = [
        
    ];
}
