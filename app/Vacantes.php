<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacantes extends Model
{
    protected $table = 'vacantes';
    protected $primaryKey = 'id';

    public $timestamps=false;
   /*  const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at'; */
    
    protected $fillable = [ 
        'estado', 
        'creado', 
        'users_id', 
        'cargo_id', 
        'paises_id',
    ];
}