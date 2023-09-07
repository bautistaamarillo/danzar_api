<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StudentItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_items')->insert([
            'student_id'=> 1,
            'item_id'=> 1
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 1,
            'item_id'=> 2
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 2,
            'item_id'=> 1
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 2,
            'item_id'=> 2
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 3,
            'item_id'=> 3
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 4,
            'item_id'=> 4
        ]);
        DB::table('student_items')->insert([
            'student_id'=> 5,
            'item_id'=> 5
        ]);
    }
}
