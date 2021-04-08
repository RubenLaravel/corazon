<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Action;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Action::create([
            'name' => 'encender'
        ]);

        Action::create([
            'name' => 'iterar'
        ]);

        Action::create([
            'name' => 'recorrer'
        ]);
    }
}
