<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropuestasHasPaises extends Model
{
    public $timestamps = false;
    // 
    protected $fillable = [ 
        'paises_id', 'propuestas_id' 
    ];

    public function pais() 
    {
        return $this->belongsTo(Paises::class, 'paises_id');
    }
}
