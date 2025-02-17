<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Teacher;

class CourseSeeder extends Seeder
{
    public function run()
{
    $teacher = Teacher::first();

    if (!$teacher) {
        $teacher = Teacher::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'address' => '123 Main St',
            'contact' => '555-1234',
            'hire_date' => '2021-09-01',
            'department_id' => 1,
            'enrollment_date' => now(),
        ]);
    }

    Course::create([
        'course_name' => 'Algebra 101',
        'course_code' => 'MATH101',
        'description' => 'Basic Algebra course.',
        'credits' => 3,
        'teacher_id' => $teacher->id,
    ]);
}
}

