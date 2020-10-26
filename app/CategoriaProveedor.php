<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class CategoriaProveedor extends Model
{
    protected $table='categoria_proveedor';

    protected $primaryKey="id_categoriaproveedor";

    public $timestamps=false;

    protected $fillable=[
        'categoria'
    ];

    protected $guarderd=[

    ];
}
