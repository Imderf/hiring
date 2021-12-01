<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospectos extends Model
{

    public $timestamps = false;
    // 
    protected $fillable = [ 
        'mnombre', 'logo', 'fuentes_id', 'tipo' 
    ];

    public function fuente() 
    {
        return $this->belongsTo(Fuentes::class, 'fuentes_id');
    }
}
