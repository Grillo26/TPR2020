<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rols';
    
    //Relación muchos a uno
    public function personas(){
        return this->belongTo('app\personas', 'id_persona');
    }
}
