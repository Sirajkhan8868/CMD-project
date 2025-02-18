<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Result;
use App\Models\Student;
use App\Models\Exam;

class ResultSeeder extends Seeder
{
    public function run()
    {
        $student = Student::first();
        $exam = Exam::first();

        Result::create([
            'student_id' => $student->id,
            'exam_id' => $exam->id,
            'marks_obtained' => 60,
            'grade' => 'B'
        ]);
    }
}
