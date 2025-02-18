<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;
use App\Models\Teacher;

class StudentClassSeeder extends Seeder
{
    public function run()
    {
        $teacher = Teacher::first();

        StudentClass::create([
            'class_name' => 'Class 8',
            'section' => 'C',
            'teacher_id' => $teacher->id,
        ]);
    }
}
