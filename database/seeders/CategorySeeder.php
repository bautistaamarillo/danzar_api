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
            'activo' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Disciplina',
            'activo' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Evento',
            'activo' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Recargo',
            'activo' => 0
        ]);

        DB::table('categories')->insert([
            'name'=> 'Descuento',
            'activo' => 1
        ]);
    }
}
