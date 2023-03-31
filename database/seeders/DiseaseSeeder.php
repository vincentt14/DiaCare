<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disease::create([
            'diseases_code' => 'P001',
            'diseases' => 'Diabetes Mellitus 1'
        ]);
        Disease::create([
            'diseases_code' => 'P002',
            'diseases' => 'Diabetes Mellitus 2'
        ]);
        Disease::create([
            'diseases_code' => 'P003',
            'diseases' => 'Diabetes Gestasional'
        ]);
    }
}
