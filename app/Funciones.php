<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funciones extends Model
{
    protected $table = 'funciones';
    protected $primaryKey = 'id';

    protected $fillable = [ 
        
        'nombre', 
        'creado', 
        

    ];
}
