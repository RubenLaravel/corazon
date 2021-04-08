<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    //Relación de uno a uno
    public function device(){
        return $this->hasOne('Apo\Models\Device');
    }
}
