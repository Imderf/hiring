<?php

namespace App\Http\Controllers;
use App\User;
use App\Cargos;
use App\Paises;
use App\Vacantes;

use Carbon\Carbon;

use Illuminate\Http\Request;

class VacantesController extends Controller
{
    public function index(){

        $users = User::get();
        $cargos = Cargos::with('funciones')->get();
        
        /* dd($cargos_funciones); */
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
        
        
        /* dd($request->all()); */

        /* $existe_cargo = Cargos::where('nombre', $request->input('cargos'))->where('persona_clasificacion', $per)->get();
        dd($existe_cargo); */
        
        $fecha = Carbon::now();
        $fec = $fecha->toDateString();
        
        
        /* dd($fec); */
        $vacantes = new Vacantes();
        $vacantes->fill([
            'estado'=> 'A',
            'creado'=> $fec,
            'users_id'=> $request->input('users'),
            'cargo_id'=> $request->input('id_cargo'),
            'paises_id'=> $request->input('pais'),
            
        ]);
        $vacantes->save();

        return redirect('/dashboard');
       
    }

    public function buscar_funciones_requisitos($id_select){
        

        $cargos_funciones = Cargos::with('funciones')->with('requisitos')->findOrfail($id_select);
        /* $cargos_requisitos = Cargos::with('requisitos')->findOrfail($id_select); */

        //dd($cargos_funciones);
        return $cargos_funciones;

    }
}
