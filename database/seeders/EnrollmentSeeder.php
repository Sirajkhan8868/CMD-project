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

        if (!$student || !$course) {
            $this->command->warn("No students or courses found. Please seed the students and courses tables first.");
            return;
        }

        Enrollment::create([
            'student_id' => $student->id,
            'course_id' => $course->id,
            'enrollment_date' => now()->toDateString(),
        ]);

        $this->command->info("Enrollment created successfully!");
    }
}
