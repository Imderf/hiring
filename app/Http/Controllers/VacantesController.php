<?php

namespace App\Http\Controllers;
use App\User;
use App\Cargos;
use App\Paises;
use App\Vacantes;
use App\DescripcionCargo;
use App\DescripcionConfirmado;

use Carbon\Carbon;

use Illuminate\Http\Request;

class VacantesController extends Controller
{
    public function index(){

        $users = User::get();
        $cargos = Cargos::with('funciones')->get();
        
        
       
        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();
        
        /* dd($cargos); */
        return view('vacante.vacanteIndex', [
            'users' => $users,
            'cargos' => $cargos,
            /* 'cargos_funciones' => $cargos_funciones,
            'cargos_requisitos' => $cargos_requisitos, */
            'paises' => $paises,
        ]);

    }

    public function store(Request $request){
        
        $descripcion = Cargos::with('descripcion_cargo')->findOrfail($request->input('id_cargo'));
        if($descripcion->descripcion_cargo == null){
            /* NO HACE NADA YA QE NO TIENE UNA DESCRIPCION_CARGO NUEVA */
            /* SOLO CREA LA VACANTE */
            $fecha = Carbon::now();
            $fec = $fecha->toDateString();
            $vacantes = new Vacantes();
            $vacantes->fill([
                'estado'=> 'A',
                'creado'=> $fec,
                'users_id'=> $request->input('users'),
                'cargo_id'=> $request->input('id_cargo'),
                'paises_id'=> $request->input('pais'),
                
            ]);
            $vacantes->save();
        }
        else{

            $dc = new DescripcionConfirmado();
            $dc->fill([
                'nombre'=> $request->input('name_cargo'),
                'descripcion_confirmadocol'=> $request->input('description_cargo'),
                'id_descripcion'=> NULL,
            ]);
            $dc->save();

            //BUSCO EL ULTIMO ID INSERTADO EN DescripcionConfirmado
            $descrip_conf= DescripcionConfirmado::all();
            $last = $descrip_conf->last();
            $ultimo_id = $last->id;


            $description = new DescripcionCargo();
            $description->fill([
                'nombre'=> $request->input('name_cargo'),
                'id_cargo'=> $request->input('id_cargo'),
                'descripcion_confirmado_id'=> $ultimo_id,
                
            ]);
            $description->save();

        
            //busco el ultimo id ingresado a la tabla descripcion_cargo
            $descrip_conf_dc= DescripcionCargo::all();
            $last = $descrip_conf_dc->last();
            $ultimo_id_dc = $last->id;


            //primero busco el ultimo obj y luego actualizo la tabla qe tenia null en id_descripcion
            $dc2 = DescripcionConfirmado::findOrfail($ultimo_id_dc);
            $dc2->id_descripcion = $ultimo_id_dc;
            $dc2->update();


            $fecha = Carbon::now();
            $fec = $fecha->toDateString();
            $vacantes = new Vacantes();
            $vacantes->fill([
                'estado'=> 'A',
                'creado'=> $fec,
                'users_id'=> $request->input('users'),
                'cargo_id'=> $request->input('id_cargo'),
                'paises_id'=> $request->input('pais'),
                
            ]);
            $vacantes->save();
        }
        
          

        return redirect('/dashboard');
       
    }

    public function buscar_funciones_requisitos($id_select){
        

        $cargos_funciones = Cargos::with('funciones')->with('requisitos')->findOrfail($id_select);
        /* $cargos_requisitos = Cargos::with('requisitos')->findOrfail($id_select); */

        //dd($cargos_funciones);
        return $cargos_funciones;

    }

    public function buscar_usuario($id){

        $users = User::findOrfail($id);

        return $users;
    }

    public function buscar_cargo_descripcion($id){

        $cargos = Cargos::with('descripcion_cargo')->findOrfail($id);
        
        return $cargos;
    }
}
