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
        student::insert([
            [
                'name'=>'Muhammad Ali',
                'email'=>'muhammadali@gmail.com',
                'age'=>19
            ],
            [
                'name'=>'Urooj Shafi',
                'email'=>'syedaurooj@gmail.com',
                'age'=>23
            ],
            [
                'name'=>'Shoaib Faisal',
                'email'=>'shoaibfaisal98@gmail.com',
                'age'=>18
            ]
        ]);
    }
}