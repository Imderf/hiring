<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{   
    public $timestamps = false;
    // 
    protected $fillable = [ 
        'pnombre'
    ];
}
