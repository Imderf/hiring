<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulantes extends Model
{
    protected $table = 'curriculum';
    protected $primaryKey = 'id';
    
    protected $fillable = [ 

        'nombre_completos', 
        'email', 
        'telefono', 
        'fecha_nacimiento', 
        'direccion',
        'ciudad',
        'paises_id',
        'years_experiencia',
        'otros_estudios',
        'archivo_cv',
        'url_linkedin',
        'informacion_adicional',
        'acepto_condiciones',
        'cargo_id',
        'vacante_id'

    ];

    public function cargos(){
        return $this->belongsTo('App\Cargos','cargo_id', 'id');
    }

    public function pais(){
        return $this->belongsTo('App\Paises','paises_id', 'id');
    }
}
