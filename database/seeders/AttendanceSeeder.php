<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\StudentClass;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        $student = Student::first();
        if (!$student) {
            $student = Student::create([
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'contact' => '555-5555',
                'enrollment_date' => '2023-01-01',
                'date_of_birth' => '2005-06-15',
                'gender' => 'Male',
                'address' => '123 Elm Street',
            ]);
        }

        $studentClass = StudentClass::first();
        if (!$studentClass) {
            $studentClass = StudentClass::create([
                'class_name' => 'Math 101',
                'section' => 'A',
                'teacher_id' => null,
                'start_date' => '2023-01-01',
                'end_date' => '2023-06-01',
            ]);
        }

        Attendance::create([
            'student_id' => $student->id,
            'student_class_id' => $studentClass->id,
            'date' => '2023-02-16',
            'status' => 'Present',
        ]);
    }
}
