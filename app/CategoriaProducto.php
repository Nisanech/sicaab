<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    protected $table='categoria_producto';

    protected $primaryKey="id_categoriaproducto";

    public $timestamps=false;

    protected $fillable=[
        'categoria'
    ];

    protected $guarderd=[

    ];
}
