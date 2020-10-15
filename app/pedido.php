<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedidos';
    
    //Relación uno a muchos 
    public function vestidos(){
        return this->hasMany('app\vestidos');
    }
    
    //relaciòn uno a muchos
    public function medidas(){
        return this->hasMany('app\medidas');
    }
}
