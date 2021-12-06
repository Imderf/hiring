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
        $cargos = Cargos::get();
        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();
        
        
        return view('vacante.vacanteIndex', [
            'users' => $users,
            'cargos' => $cargos,
            'paises' => $paises
        ]);

    }
}
