<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('tutors')->insert([
                'name' => '',
                'lastname' => '', 
                'email' => '',
                'phone_number' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}