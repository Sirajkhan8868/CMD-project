<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;
use App\Models\Student;

class LibrarySeeder extends Seeder
{
    public function run()
    {
        $student = Student::first();

        Library::create([
            'student_id' => $student->id,
            'title' => 'Introduction to Algebra',
            'author' => 'John Smith',
            'isbn' => '978-1234567890',
            'quantity' => 3
        ]);
    }
}
