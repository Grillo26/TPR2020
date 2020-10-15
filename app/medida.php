<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    protected $table = 'medidas';
    
    //relación uno a muchos
    public function pedidos(){
        return this->hasMany('app\pedidos');
    }
}
