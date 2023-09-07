<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Model_has_Roles_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('model_has_roles')->insert([
            'role_id' => 13, 
            'model_type' => 'User',
            'model_id' => 1,
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 14,
            'model_type' => 'User',
            'model_id' => 2,
        ]);
    }
}
