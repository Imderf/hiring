<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    //
    protected $primaryKey = 'idInvoice';
    
    protected $fillable = [ 
        'nit', 'name', 'subTotal', 'taxTotal', 'totalDiscount', 'total', 'estado'
    ];

    protected $hidden = [
    ];

    public function getdetails()
    {
        return $this->hasMany(Invoicedetails::class, 'idInvoice');
    }

}
