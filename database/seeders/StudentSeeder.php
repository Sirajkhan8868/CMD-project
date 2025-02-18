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

        if (!$guardian || !$studentClass) {
            return;
        }

        Student::updateOrCreate(
            ['email' => 'kami@gmail.com'],
            [
                'first_name' => 'kami',
                'last_name' => 'khan',
                'date_of_birth' => '2005-04-15',
                'gender' => 'Male',
                'address' => '456 Eln St',
                'contact' => '555-9887',
                'enrollment_date' => '2023-02-20',
                'guardian_id' => $guardian->id,
                'student_class_id' => $studentClass->id,
            ]
        );
    }
}
