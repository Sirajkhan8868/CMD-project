<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    protected $model = Guardian::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'contact' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
