<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='materiales';

    protected $primaryKey="id_material";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'nombre_material',
        'unidad_medida',
        'stock',
        'categoria'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
