<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Guardian;
use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'guardian_id' => Guardian::inRandomOrder()->first()->id,
            'student_class_id' => StudentClass::inRandomOrder()->first()->id,
        ];
    }
}
