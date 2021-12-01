<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectosHasPropuestas extends Model
{
    public $timestamps = false;
    // 
    protected $fillable = [ 
        'proyectos_id', 'propuestas_id' 
    ];
}
