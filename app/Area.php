<?php

namespace sicaab;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table='area';

    protected $primaryKey="id_area";

    public $timestamps=false;

    protected $fillable=[
        'area'
    ];

    protected $guarderd=[

    ];
}
