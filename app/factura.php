<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = 'facturas';
    
    //relación uno a uno
    public function detalle_facturas(){
        return this->hasOne('app\detalle_facturas');
    }
    
    //relación uno a uno
    public function clientes(){
        return this->hasOne('app\clientes');
    }
}
