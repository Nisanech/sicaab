<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class ArteProducto extends Model
{
    protected $table='arte_producto';

    protected $primaryKey="id_arte";

    public $timestamps=false;

    // Campos que se tendrán en cuenta en el modelo para el registro de datos
    protected $fillable = [
        'nombre_producto',
        'alto',
        'largo',
        'ancho',
        'imagen',
        'estado',
        'id_cliente',
        'id_categoriaproducto'
    ];

    // Campos que no se tendrán en cuenta en el modelo para el registro de datos
    protected $guarderd=[
        
    ];
}
