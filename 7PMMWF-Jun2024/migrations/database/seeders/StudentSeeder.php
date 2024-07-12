<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::create([
            'name' => 'Ali Raza',
            'email' => 'ali@raza.com',
            'city' => 'Karachi',
            'dob' => '2000-07-01'
        ]);
    }
}
