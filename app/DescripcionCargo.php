<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescripcionCargo extends Model
{
    protected $table = 'descripcion_cargo';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre_cargo', 
        'id_cargo',
        'descripcion_confirmado_id' 
    ];

}
