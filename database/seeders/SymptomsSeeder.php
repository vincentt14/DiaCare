<?php

namespace Database\Seeders;

use App\Models\Symptoms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Symptoms::create([
            'kode_gejala' => 'G001',
            'gejala' => 'Sakit Perut'
        ]);
        Symptoms::create([
            'kode_gejala' => 'G002',
            'gejala' => 'Mual'
        ]);
    }
}
