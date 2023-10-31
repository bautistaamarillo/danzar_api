<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('settings')->insert([
          'name'=> 'primer dia de vencimiento',
          'activo' => 0
        ]);

        DB::table('settings')->insert([
          'name'=> 'segundo dia de vencimiento',
          'activo' => 0
        ]);

        DB::table('settings')->insert([
          'name'=> 'tercer dia de vencimiento',
          'activo' => 0
        ]);

        
    }
}
