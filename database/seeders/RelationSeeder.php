<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relation;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relation::create([
            'device_id' => '1',
            'device2_id' => '2',
        ]);

        Relation::create([
            'device_id' => '3',
            'device2_id' => '4',
        ]);

        Relation::create([
            'device_id' => '5',
            'device2_id' => '6',
        ]);

        Relation::create([
            'device_id' => '7',
            'device2_id' => '8',
        ]);
    }
}
