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
            'kode_penyakit' => 'P001',
            'penyakit' => 'Diabetes Mellitus 1'
        ]);
        Disease::create([
            'kode_penyakit' => 'P002',
            'penyakit' => 'Diabetes Mellitus 2'
        ]);
        Disease::create([
            'kode_penyakit' => 'P003',
            'penyakit' => 'Diabetes Gestasional'
        ]);
    }
}
