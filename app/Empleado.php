<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';

    protected $primaryKey="id_empleado";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'documento',
        'p_nombre',
        's_nombre',
        'p_apellido',
        's_apellido',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'persona_contacto',
        'telefono_contacto',
        'id_cargo'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
