<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{   

    protected $table = 'paises';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 

        'pnombre', 
        'estado', 

    ];
}
