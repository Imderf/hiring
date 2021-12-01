<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuestas extends Model
{
    public $timestamps = false;
    // 
    protected $fillable = [ 
        'prospectos_id', 'tipos_ventas_id', 'descripcion', 'valor_sin_impuestos', 'monedas_id', 'fecha_ini', 'fecha_fin', 'archivo', 'estados_id', 'duracion_mes'
    ];

    public function cliente() 
    {
        return $this->belongsTo(Prospectos::class, 'prospectos_id');
    }
    
    public function PEPpaises() 
    {
        $results = PaisesEjecucionPropuestas::
        select('pnombre')
        ->join('paises', 'paises.id', '=', 'paises_id')
        ->where('propuestas_id', '=', $this->id)
        ->get();

        if($results) {
            $lista = '';
            foreach($results as $res) {
                $lista .= $res->pnombre.', ';
            }
            return substr($lista, 0, -2);
        } else { 
            return 'N/A'; 
        }
    }
    
    public function PHPproyectos() 
    {
        $results = ProyectosHasPropuestas::
        select('pnombre')
        ->join('proyectos', 'proyectos.id', '=', 'proyectos_id')
        ->where('propuestas_id', '=', $this->id)
        ->get();
        
        if($results) {
            $lista = '';
            foreach($results as $res) {
                $lista .= $res->pnombre.', ';
            }
            return substr($lista, 0, -2);
        } else { 
            return 'N/A'; 
        }
    }
    
    public function prospecto() 
    {
        return $this->belongsTo(Prospectos::class, 'prospectos_id');
    }
    
    public function estado() 
    {
        return $this->belongsTo(Estados::class, 'estados_id');
    }

    public function fomatoFecha($fecha, $formato) 
    {        
        return date($formato, strtotime($fecha) );
    }
    
    public function fomatoMoney($valor) 
    {        
        return '$'.number_format($valor);
    }
}
