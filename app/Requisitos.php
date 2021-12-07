<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisitos extends Model
{
    protected $table = 'requisitos';
    protected $primaryKey = 'id';

    protected $fillable = [ 
        
        'nombre', 
        'creado', 
        

    ];
}
