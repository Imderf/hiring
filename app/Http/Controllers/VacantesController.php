<?php

namespace App\Http\Controllers;
use App\User;
use App\Cargos;
use App\Paises;

use Illuminate\Http\Request;

class VacantesController extends Controller
{
    public function index(){

        $users = User::get();
        $cargos = Cargos::with('funciones')->get();
        $cargos_funciones = Cargos::with('funciones')->findOrfail(2);
        $cargos_requisitos = Cargos::with('requisitos')->findOrfail(2);
        /* dd($cargos_funciones); */
        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();
        
        /* dd($cargos); */
        return view('vacante.vacanteIndex', [
            'users' => $users,
            'cargos' => $cargos,
            'cargos_funciones' => $cargos_funciones,
            'cargos_requisitos' => $cargos_requisitos,
            'paises' => $paises,
        ]);

    }
}
