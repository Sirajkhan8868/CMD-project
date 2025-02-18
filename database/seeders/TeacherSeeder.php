<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Department;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $department = Department::first();

            Teacher::create([
                'first_name' => 'ali',
                'last_name' => 'Doe',
                'email' => 'ali@example.com',
                'address' => '123 Main St',
                'contact' => '555-1234',
                'hire_date' => '2020-01-01',
                'department_id' => 1,
                'enrollment_date' => '2020-01-01',
            ]);

    }
}
