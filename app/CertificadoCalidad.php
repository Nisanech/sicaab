<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class CertificadoCalidad extends Model
{
    protected $table='certificado_calidad';

    protected $primaryKey="id_certificadocalidad";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'fecha',
        'estado',
        'id_ordenproduccion'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
