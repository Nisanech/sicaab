<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedores';

    protected $primaryKey="id_proveedor";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'nit',
        'razon_social',
        'direccion',
        'telefono',
        'correo',
        'persona_contacto',
        'tipo',
        'id_pago'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
