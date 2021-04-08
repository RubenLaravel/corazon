<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    public $timestamps = false;

    //Relación de uno a muchos
    public function device(){
        return $this->hasMany('Apo\Models\Device');
    }
}
