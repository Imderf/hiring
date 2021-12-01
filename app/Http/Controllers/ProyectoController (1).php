<?php

namespace App\Http\Controllers;

use App\Proyectos;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Request $request)
    {               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->pnombre)) {

            Proyectos::create([
                'pnombre' => $request->pnombre,
            ]);

            return back()->with('success', 'Proyecto creado con éxito.');

        } else {
            return back()->withErrors(['name' => 'Se requiere el nombre del proyecto.']);            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    public function editarajax(Request $request)
    {            
        $propuesta = Propuestas::
        where('id', $request->input('id'))
        ->first();

        $clientes = Prospectos::
        where('estado', 'A')
        ->whereIn('tipo', ['CLIENTE'])
        ->orderBy('id','DESC')
        ->get();
        
        $prospectos = Prospectos::
        where('estado', 'A')
        ->whereIn('tipo', ['PROSPECTO'])
        ->orderBy('id','DESC')
        ->get();

        $paises = Paises::
        where('estado', 'A')
        ->orderBy('pnombre','ASC')
        ->get();
        
        $proyectos = Proyectos::
        orderBy('pnombre','ASC')
        ->get();
        
        $estados = Estados::        
        where('estado', 'A')
        ->orderBy('enombre','ASC')
        ->get();
        
        $tipoventas = TiposVentas::        
        where('estado', 'A')
        ->orderBy('tnombre','ASC')
        ->get();
        
        $monedas = Monedas::        
        where('estado', 'A')
        ->orderBy('mnombre','ASC')
        ->get();

        $view = view("propuestas.form", [
            'propuesta' => $propuesta,
            'prospectos' => $prospectos,
            'clientes' => $clientes,
            'paises' => $paises,
            'proyectos' => $proyectos,
            'estados' => $estados,
            'tiposventas' => $tipoventas,
            'monedas' => $monedas
        ])->render();

        return response()->json(['html'=>$view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      
    }


    
}
