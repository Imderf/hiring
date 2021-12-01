<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Products;
use App\Invoicedetails;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $invoices = Invoices::query();

        if (!empty($request->input('nit'))) 
            $invoices->where('nit', 'LIKE', $request->input('nit').'%'); 

        if ($request->input('valor_i'))
            $invoices->whereBetween('products.total', [$request->input('valor_i'), $request->input('valor_f') ]);

        if (!empty($request->input('orden_p')))
            $invoices->orderBy('idInvoice', $request->input('orden_p'));
        else
            $invoices->orderBy('idInvoice','DESC');

        $view = $invoices->paginate(10);

        return view('invoices.index', ['invoices' => $view]);   
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Products::
        where('stock', '>', 0)
        ->orderBy('idProduct','DESC')
        ->get();

        return view('invoices.create', ['productos' => $productos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = 0;
        $impuesto = 0;
        $descuento = 0;        

        foreach($request->price as $precio) {
            $total += $precio;
        }

        $subtotal = $total;

        $descuento = $total - ($total * $request->totalDiscount / 100);
        $total -= $descuento;
        $impuesto =  $total - ($total * $request->taxTotal / 100);
        $total += $impuesto;

        $invoices = Invoices::create([
            'nit' => $request->nit,
            'name' => $request->name,
            'totalDiscount' => $request->totalDiscount,
            'taxTotal' => $request->taxTotal,

            'subTotal' => $subtotal,
            'total' => $total
        ]);      

        foreach($request->idp as $index=>$idp) {

            $descuentoItem = $request->price[$index] - ( $request->price[$index] * $request->totalDiscount / 100); 

            Invoicedetails::create([
                'idInvoice' => $invoices->idInvoice,
                'idProduct' => $idp,
                'quantity' => $request->quantity[$index],
                'price' => $request->price[$index],
                'discount' => $descuentoItem
            ]);

            $productos = Products::where('idProduct', $idp)->first();
            $stock = $productos->stock - $request->quantity[$index];
            $productos->update([
                'stock' => $stock
            ]);
        }

        return redirect()->route('invoices.index')->with('success', 'Se hizo la compra con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show(Invoices $invoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Products::
        where('stock', '>', 0)
        ->orderBy('idProduct','DESC')
        ->get();

        $invoices = Invoices::where('idInvoice','=',$id)->first();

        return view('invoices.edit', [ 'invoices' => $invoices, 'productos' => $productos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $total = 0;
        $impuesto = 0;
        $descuento = 0;        

        foreach($request->price as $precio) {
            $total += $precio;
        }

        $subtotal = $total;

        $descuento = $total - ($total * $request->totalDiscount / 100);
        $total -= $descuento;
        $impuesto =  $total - ($total * $request->taxTotal / 100);
        $total += $impuesto;

        $invoices = Invoices::where('idInvoice','=', $id)->first();
        $invoices->update([
            'nit' => $request->nit,
            'name' => $request->name,
            'totalDiscount' => $request->totalDiscount,
            'taxTotal' => $request->taxTotal,

            'subTotal' => $subtotal,
            'total' => $total
        ]);

        Invoicedetails::where('idInvoice', $id)->delete();

        foreach($request->idp as $index=>$idp) {

            $descuentoItem = $request->price[$index] - ( $request->price[$index] * $request->totalDiscount / 100); 

            Invoicedetails::create([
                'idInvoice' => $id,
                'idProduct' => $idp,
                'quantity' => $request->quantity[$index],
                'price' => $request->price[$index],
                'discount' => $descuentoItem
            ]);

            $productos = Products::where('idProduct', $idp)->first();
            $stock = $productos->stock - $request->quantity[$index];
            $productos->update([
                'stock' => $stock
            ]);
        }

        return redirect()->route('invoices.index')->with('status', 'Se hizo la actualización con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Invoicedetails::where('idInvoice', $id)->delete();
        Invoices::where('idInvoice', $id)->delete();

        return redirect()->route('invoices.index')->with('status', 'Se elimino con éxito.');
    }
}
