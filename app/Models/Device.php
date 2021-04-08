<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public $timestamps = false;

    //Relación de uno a uno
    public function user(){
        return $this->hasOne('Apo\Models\User');
    }

    public function relation(){
        return $this->hasOne('Apo\Models\Relation');
    }

    //Relación de uno a muchos (Inversa)
    public function conditions(){
        return $this->belongsTo('Apo\Models\Condition');
    }

    public function actions(){
        return $this->belongsTo('Apo\Models\Action');
    }
}
