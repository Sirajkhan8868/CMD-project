<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guardian;

class GuardianSeeder extends Seeder
{
    public function run()
    {
        Guardian::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
            'address' => '123 Main St',
            'contact' => '555-5678',
        ]);
        Guardian::create([
            'first_name' => 'kamran',
            'last_name' => 'ali',
            'email' => 'kamran@example.com',
            'address' => '123 Main St haripur',
            'contact' => '554-5678',
        ]);
    }
}
