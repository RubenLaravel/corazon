<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Device;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(10)->create();
        $this->call(ConditionSeeder::class);
        $this->call(ActionSeeder::class);
        Device::factory(10)->create();
        $this->call(RelationSeeder::class);

    }
}
