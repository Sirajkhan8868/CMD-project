<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fee;
use App\Models\Student;

class FeeSeeder extends Seeder
{
    public function run()
    {
        $student = Student::first();

        Fee::create([
            'student_id' => $student->id,
            'payment_date' => '2023-02-15',
            'amount' => 1500.00,
            'status' => 'paid'
        ]);
    }
}
