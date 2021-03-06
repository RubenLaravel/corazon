<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'name' => 'soltero'
        ]);

        Condition::create([
            'name' => 'pareja'
        ]);

        Condition::create([
            'name' => 'pendiente'
        ]);
    }
}
