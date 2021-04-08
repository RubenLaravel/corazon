<?php

namespace Database\Factories;

use App\Models\Relation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Device;

class RelationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Relation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $indices=Device::all()->pluck('id');

        foreach ($indices as $indice) {
            return [
                'device_id' => $indice[0],
                'device2_id' => $indice[1],
            ];
        }
        
        
        // for ($i=1; $i < $variable; $i+=2){
        //     return [
        //         'device_id' => $i,
        //         'device2_id' => $i+=1,
        //     ];
        // }
        
        // $d1 = Device::all()->random()->id;
        // $d2 = Device::all()->random()->id;

        // $relacion = Relation::where('device_id',$d1)
        //                     ->orWhere('device2_id',$d1)
        //                     ->orWhere('device_id',$d2)
        //                     ->orWhere('device2_id',$d2)
        //                     ->get();

        // if ($d1 == $d2){
        //     return $this->definition();

        // }else{   
            
        //     if($relacion == " "){
                
        //         return [
        //             'device_id' => $d1,
        //             'device2_id' => $d2,
        //         ];

        //     }else{
        //         return $this->definition();
            
        //     }
        // }
    }
}


