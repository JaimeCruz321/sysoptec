<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;
    protected $guarded = [];


    //Relacion uno a muchos 
    public function computadora(){
        return $this->belongsTo('App\Models\Computadora');
    }
}
