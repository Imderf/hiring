<?php

namespace App\Http\Controllers;
use App\Paises;
use App\Postulantes;

use Illuminate\Http\Request;

class PostulantesController extends Controller
{
    public function index(){

        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();
        $postulantes = Postulantes::with('cargos')->with('pais')->get();
        /* dd($postulantes); */
   

    
        return view('postulantes.index', [
            'paises' => $paises,
            'postulantes' => $postulantes
        ]);

    }

    public function store(Request $request){

        dd($request->all());
    }
}
