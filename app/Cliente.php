<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';

    protected $primaryKey="id_cliente";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'nit',
        'razon_social',
        'direccion',
        'telefono',
        'correo',
        'persona_contacto',
        'ciudad',
        'id_pago'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
