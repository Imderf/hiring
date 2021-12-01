<?php

namespace App\Http\Controllers;

use App\Contratos;
use App\Paises;
use App\Clientes;
use App\Proyectos;
//use App\Http\Requests\ProductsRequest;

use Illuminate\Http\Request;

class ContratoController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Request $request)
    {           
        $clientes = Clientes::
        orderBy('id','DESC')
        ->get();

        $paises = Paises::
        where('estado', 'A')
        ->orderBy('id','DESC')
        ->get();
        
        $proyectos = Proyectos::
        orderBy('id','DESC')
        ->get();

        $contratos = Contratos::query();

        if (!empty($request->input('cliente')))
            $contratos->where('clientes_id', '=', $request->input('cliente')); 
        if (!empty($request->input('cliente')))
            $contratos->where('clientes_id', '=', $request->input('cliente')); 
        if (!empty($request->input('cliente')))
            $contratos->where('clientes_id', '=', $request->input('cliente')); 

        return view('contratos.index', [
            'contratos' => $contratos->get(),
            'clientes' => $clientes,
            'paises' => $paises,
            'proyectos' => $proyectos,
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //
        $producto = Products::create($request->all());     
        return back()->with('success', 'Creado con éxito.');
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
