<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
        DepartmentSeeder::class,
        TeacherSeeder::class,
        GuardianSeeder::class,
        StudentSeeder::class,
        StudentClassSeeder::class,
        CourseSeeder::class,
        EnrollmentSeeder::class,
        AttendanceSeeder::class,
        ExamSeeder::class,
        FeeSeeder::class,
        LibrarySeeder::class,
        ResultSeeder::class,
        AdminSeeder::class,
        ]);
    }
}
