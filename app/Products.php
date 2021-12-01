<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $primaryKey = 'idProduct';

    protected $fillable = [ 
        'name', 'price', 'stock', 'created_at', 'update_at', 'deleted_at', 'code'
    ];

    protected $hidden = [
        'code'
    ];

    public function setCodeAttribute($value) 
    {
        $length = 10;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $this->attributes['code'] = $randomString;
    }   
}
