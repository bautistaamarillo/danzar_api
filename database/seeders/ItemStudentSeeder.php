<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item_students')->insert([
            'item_id'=> 1,
            'student_id'=> 1,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 2,
            'student_id'=> 1,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 1,
            'student_id'=> 2,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 2,
            'student_id'=> 2,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 3,
            'student_id'=> 3,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 4,
            'student_id'=> 4,
            'activo' => 0
        ]);
        DB::table('item_students')->insert([
            'item_id'=> 5,
            'student_id'=> 5,
            'activo' => 0
        ]);
    }
}
