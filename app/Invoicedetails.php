<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicedetails extends Model
{
    //
    protected $primaryKey = 'idInvoiceDetail';
    
    protected $fillable = [ 
        'idInvoice', 'idProduct', 'quantity', 'price', 'discount'
    ];

    protected $hidden = [
    ];

    
    public function getproducto() 
    {
        return $this->belongsTo(Products::class, 'idProduct');
    }

}
