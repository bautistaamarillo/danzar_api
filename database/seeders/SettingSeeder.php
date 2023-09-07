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
            'name'=> 'first_expiration_day',
        ]);

        DB::table('settings')->insert([
          'name'=> 'second_expiration_day',
        ]);

        DB::table('settings')->insert([
            'name'=> 'third_day_of_expiration',
          ]);

        
    }
}
