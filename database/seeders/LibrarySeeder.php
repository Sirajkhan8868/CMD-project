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
        if (!$student) {
            $student = Student::create([
                'first_name' => 'Default',
                'last_name' => 'Student',
                'email' => 'default.student@example.com',
                'contact' => '555-555-5555',
                'enrollment_date' => now(),
                'date_of_birth' => '2000-01-01',
                'gender' => 'Male',
                'address' => '123 Default Street',
            ]);
        }

        Library::create([
            'student_id' => $student->id,
            'title' => 'Introduction to Data Structure',
            'author' => 'John Smith',
            'isbn' => '978-1232567860',
            'quantity' => 5,
        ]);
    }
}
