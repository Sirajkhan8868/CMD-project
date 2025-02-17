<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\StudentClass;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $guardian = Guardian::first();
        $studentClass = StudentClass::first();

        Student::create([
            'first_name' => 'Alex',
            'last_name' => 'Smith',
            'date_of_birth' => '2005-04-15',
            'gender' => 'Male',
            'address' => '456 Elm St',
            'contact' => '555-9876',
            'email' => 'alex@gmail.com',
            'enrollment_date' => '2023-02-16',
            'guardian_id' => $guardian->id,
            'student_class_id' => $studentClass->id,
        ]);
        Student::create([
            'first_name' => 'kamran',
            'last_name' => 'khan',
            'date_of_birth' => '2002-04-15',
            'gender' => 'Male',
            'address' => 'Haripur',
            'contact' => '554-9876',
            'email' => 'alex@gmail.com',
            'enrollment_date' => '2023-02-17',
            'guardian_id' => $guardian->id,
            'student_class_id' => $studentClass->id,
        ]);
    }
}
