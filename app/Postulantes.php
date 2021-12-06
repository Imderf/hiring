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
}
