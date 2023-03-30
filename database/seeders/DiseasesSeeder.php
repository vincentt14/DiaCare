<?php

namespace Database\Seeders;

use App\Models\Diseases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diseases::create([
            'kode_penyakit' => 'P001',
            'penyakit' => 'Diabetes Mellitus 1'
        ]);
        Diseases::create([
            'kode_penyakit' => 'P002',
            'penyakit' => 'Diabetes Mellitus 2'
        ]);
        Diseases::create([
            'kode_penyakit' => 'P003',
            'penyakit' => 'Diabetes Gestasional'
        ]);
    }
}
