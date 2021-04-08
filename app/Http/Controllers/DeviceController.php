<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Relation;

class DeviceController extends Controller
{
    public function casa(){
        $d1 = Device::all()->random()->id;
        $d2 = Device::all()->random()->id;

        // $d1 = 2;
        // $d2 = 3;

        $casa = Relation::where(['device_id'=>$d1, 'device2_id'=>$d2])
                            ->orWhere(['device_id'=>$d2, 'device2_id'=>$d1])
                            ->get();

        // if($relacion == " ")
        //  $casa= 'a';

        // else
        //  $casa = 10;
        
        return view('casa', compact('casa'));
    }
}
