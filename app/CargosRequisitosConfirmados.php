<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargosRequisitosConfirmados extends Model
{
    protected $table = 'cargos_requisitos_confirmados';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 
        
        'nombre', 
        'editado', 
        'creado', 
        'cargos_id', 
        'requisitos_id' 

    ];
}
