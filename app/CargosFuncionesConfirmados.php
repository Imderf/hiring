<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargosFuncionesConfirmados extends Model
{
    protected $table = 'cargos_funciones_confirmados';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 
        
        'nombre', 
        'editado', 
        'creado', 
        'cargos_id', 
        'funciones_id' 

    ];
}
