<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::firstOrCreate(
            ['username' => 'superadmin'],
            [
                'password' => bcrypt('admin123'),
                'role' => 'superadmin'
            ]
        );
    }
}
