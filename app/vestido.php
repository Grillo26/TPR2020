<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vestido extends Model
{
    protected $table = 'vestidos';
    
    //relación uno a muchos
    public function pedidos(){
        return this->hasMany('app\pedidos');
    }
}
