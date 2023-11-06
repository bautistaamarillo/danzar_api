<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name'=> 'Inscripción',
            'active' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Disciplina',
            'active' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Evento',
            'active' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Recargo',
            'active' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Descuento',
            'active' => 1
        ]);
    }
}
