<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\FuncCall;

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
                'city' => $student->city
            ]);
        });
        //
    }
}
