<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StudentTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_tutors')->insert([
            'student_id'=> 1,
            'tutor_id'=> 1,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 2,
            'tutor_id'=> 2,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 3,
            'tutor_id'=> 3,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 4,
            'tutor_id'=> 4,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 5,
            'tutor_id'=> 5,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 6,
            'tutor_id'=> 6,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 7,
            'tutor_id'=> 7,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 8,
            'tutor_id'=> 8,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 9,
            'tutor_id'=> 9,
            'active' => 0
        ]);
        DB::table('student_tutors')->insert([
            'student_id'=> 10,
            'tutor_id'=> 10,
            'active' => 0
        ]);
    }
}
