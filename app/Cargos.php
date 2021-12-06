<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $table = 'cargos';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 
        
        'nombre', 
        'decripcion', 
        'creado', 
        'descripcion_cargo_id', 

    ];
}
