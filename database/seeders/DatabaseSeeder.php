<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\SettingSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //SettingSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            TutorSeeder::class,
            ItemSeeder::class,
            CategorySeeder::class,
            PaymentSeeder::class,
            StudentTutorSeeder::class,
            StudentItemSeeder::class,
            RolesSeeder::class,
        ]);
        
    }
}
