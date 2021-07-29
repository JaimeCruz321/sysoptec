<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion uno a muchos 
    public function asignacions(){
        return $this->hasMany('App\Models\Asignacion');
    }

    //Relacion uno a muchos 
    public function soportes(){
        return $this->hasMany('App\Models\Soporte');
    }
}
