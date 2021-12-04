<?php

namespace App\Http\Controllers;
use App\Paises;

use Illuminate\Http\Request;

class PostulantesController extends Controller
{
    public function index(){

        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();

        /* dd($paises); */
        return view('postulantes.formPostulantesindex', [
            'paises' => $paises,
        ]);

    }

    public function store(Request $request){

        dd($request->all());
    }
}
