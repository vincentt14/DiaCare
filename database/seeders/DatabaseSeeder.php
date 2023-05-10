<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SymptomSeeder::class,
            DiseaseSeeder::class,
            SolutionSeeder::class,
            MedicineSeeder::class,
            RuleSeeder::class,
        ]);
    }
}
