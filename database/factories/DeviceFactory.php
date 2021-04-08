<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Condition;
use App\Models\Action;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuarios = User::all()->pluck('id');
        $condiciones = Condition::all()->pluck('id');
        $acciones = Action::all()->pluck('id');

        return [
            'mac' => $this->faker->unique->macAddress,
            'user_id' => $this->faker->unique()->randomElement($usuarios),
            'condition_id' => $this->faker->randomElement($condiciones),
            'action_id' => $this->faker->randomElement($acciones),
        ];
    }
}
