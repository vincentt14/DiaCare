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
            'symptoms_code' => 'G001',
            'symptoms' => 'Sakit Perut'
        ]);
        Symptoms::create([
            'symptoms_code' => 'G002',
            'symptoms' => 'Mual'
        ]);
    }
}
