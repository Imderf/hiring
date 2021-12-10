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

    ];

    public function funciones(){
        return $this->belongsToMany('App\Funciones','cargos_has_funciones','cargo_id', 'funciones_id');
    }

    public function requisitos(){
        return $this->belongsToMany('App\Requisitos','cargo_has_requisitos','cargo_id', 'requisitos_id');
    }

    public function descripcion_cargo(){
        return $this->hasOne('App\DescripcionCargo','id_cargo', 'id');
    }
}
