<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion uno a muchos 
    public function responsables(){
        return $this->hasMany('App\Models\Responsable');
    }
}    
