<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exam;
use App\Models\Course;

class ExamSeeder extends Seeder
{
    public function run()
    {
        $course = Course::first();

        Exam::create([
            'course_id' => $course->id,
            'exam_name' => 'Midterm Exam',
            'exam_date' => '2023-05-20',
        ]);
    }
}
