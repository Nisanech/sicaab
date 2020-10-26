<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class CategoriaMaterial extends Model
{
    protected $table='categoria_material';

    protected $primaryKey="id_categoriamaterial";

    public $timestamps=false;

    protected $fillable=[
        'categoria'
    ];

    protected $guarderd=[

    ];
}
