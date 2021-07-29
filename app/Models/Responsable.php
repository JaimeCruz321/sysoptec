<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;
    protected $guarded = [];


    //Relacion uno a muchos 
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

     //Relacion uno a muchos
     public function asignacions(){
        return $this->hasMany('App\Models\Asignacion');
    }

}
