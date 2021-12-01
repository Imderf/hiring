<?php

namespace App\Http\Controllers;

use App\Products;
use App\Http\Requests\ProductsRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index(Request $request)
    {
        //
        $productos = Products::query();

        if (!empty($request->input('search'))) 
            $productos->where('nombre_p', 'LIKE', $request->input('search').'%'); 

        if ($request->input('valor'))
            $productos->whereBetween('products.price', [$request->input('valor_i'), $request->input('valor_f') ]);

        if (!empty($request->input('orden_p')))
            $productos->orderBy('idProduct', $request->input('orden_p'));
        else
            $productos->orderBy('idProduct','DESC');

        $view = $productos->paginate(10);

        return view('products.index', ['productos' => $view]);   
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
        $producto = Products::create($request->all() + ['code' => 1]);     
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
        //
        $producto = Products::where('idProduct','=',$id)->first();

        return view('products.edit', [ 'producto' => $producto ]);
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
        //
        $producto = Products::where('idProduct','=', $id)->first();
        $producto->update($request->all());

        return back()->with('success', 'Actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Products::where('idProduct','=', $id)->first();
        $producto->delete();

        return redirect()->route('products.index')->with('success', 'Se elimino producto con éxito.');  
    }
}
