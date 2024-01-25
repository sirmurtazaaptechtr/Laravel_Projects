<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(path:'database/JSON/student.json');
        $students = collect(json_decode($json_data));

        $students->each(function($student) {
            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'age' => $student->age,
                'gender' => $student->gender
            ]);
        });
        // student::insert([
        //     [
        //         'name'=>'Muhammad Ali',
        //         'email'=>'muhammadali@gmail.com',
        //         'age'=>19
        //     ],
        //     [
        //         'name'=>'Urooj Shafi',
        //         'email'=>'syedaurooj@gmail.com',
        //         'age'=>23
        //     ],
        //     [
        //         'name'=>'Shoaib Faisal',
        //         'email'=>'shoaibfaisal98@gmail.com',
        //         'age'=>18
        //     ]
        // ]);
    }
}