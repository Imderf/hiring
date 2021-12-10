<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescripcionConfirmado extends Model
{
    protected $table = 'descripcion_confirmado';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 
        'id_descripcion',
        'descripcion_confirmadocol',
         
    ];
}
