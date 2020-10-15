<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'clientes';
    
    //relación muchos a uno
    public function personas(){
        return this-> belongTo('app\personas', 'id_persona');
    }
}
