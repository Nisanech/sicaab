<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='material';

    protected $primaryKey="id_material";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'nombre_material',
        'unidad_medida',
        'stock',
        'id_categoriamaterial'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[

    ];
}
