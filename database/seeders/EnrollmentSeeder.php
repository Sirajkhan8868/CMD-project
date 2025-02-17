<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        $student = Student::first();
        $course = Course::first();

        Enrollment::create([
            'student_id' => $student->id,
            'course_id' => $course->id,
            'enrollment_date' => '2023-02-16',
        ]);
    }
}
