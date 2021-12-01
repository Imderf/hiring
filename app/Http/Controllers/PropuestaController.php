<?php

namespace App\Http\Controllers;

use App\Propuestas;
use App\Prospectos;
use App\Fuentes;
use App\Paises;
use App\Proyectos;
use App\Estados;
use App\TiposVentas;
use App\Monedas;
use App\ProyectosHasPropuestas;
use App\PaisesEjecucionPropuestas;
use App\PropuestasHasPaises;
//use App\Http\Requests\ProductsRequest;

use Illuminate\Http\Request;

class PropuestaController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Request $request)
    {       
        //
        $fuentes = Fuentes::
        where('estado', 'A')
        ->orderBy('id','DESC')
        ->get();

        $clientes = Prospectos::
        where('estado', 'A')
        ->whereIn('tipo', ['CLIENTE'])
        ->orderBy('id','DESC')
        ->get();
        
        $prospectos = Prospectos::
        where('estado', 'A')
        ->whereIn('tipo', ['PROSPECTO', 'CLIENTE'])
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

        $propuestas = Propuestas::query();

        if (!empty($request->input('cliente')))
            $propuestas->where('clientes_id', '=', $request->input('cliente')); 
        if (!empty($request->input('pais')))
            $propuestas->where('clientes_id', '=', $request->input('pais')); 
        if (!empty($request->input('proyecto')))
            $propuestas->where('clientes_id', '=', $request->input('proyecto')); 

        return view('propuestas.index', [
            'propuestas' => $propuestas->get(),
            'fuentes' => $fuentes, 
            'prospectos' => $prospectos,
            'clientes' => $clientes,
            'paises' => $paises,
            'proyectos' => $proyectos,
            'estados' => $estados,
            'tiposventas' => $tipoventas,
            'monedas' => $monedas
        ]); 
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
        if($request->hasFile('archivo')) {
            
            $img = $request->file('archivo');

            $propuesta = Propuestas::create([
                'prospectos_id' => $request->prospecto,
                'estados_id' => $request->estado,
                'tipos_ventas_id' => $request->tp,
                'descripcion' => $request->descripcion,
                'valor_sin_impuestos' => $request->valor,
                'monedas_id' => $request->moneda,
                'fecha_ini' => $request->finicio,
                'fecha_fin' => $request->ffinal,
                'duracion_mes' => $request->duracion,
                'archivo' => $img->store('propuestas', 'public')
            ]);

            foreach($request->paises as $pais) {
                PaisesEjecucionPropuestas::create([
                    'paises_id' => $pais,
                    'propuestas_id' => $propuesta->id
                ]); 
            }
            
            /*PropuestasHasPaises::create([
                'paises_id' => $request->pais,
                'propuestas_id' => $propuesta->id
            ]); */
            
            foreach($request->proyectos as $proyecto) {
                ProyectosHasPropuestas::create([
                    'proyectos_id' => $proyecto,
                    'propuestas_id' => $propuesta->id
                ]);
            }

            return back()->with('success', 'Propuesta creado con éxito.');

        } else {
            return back()->withErrors(['name' => 'Se requiere el archivo de la propuestas.']);            
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
