<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaisesEjecucionPropuestas extends Model
{
    public $timestamps = false;
    // 
    protected $fillable = [ 
        'paises_id', 'propuestas_id' 
    ];
}
