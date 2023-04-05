<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Symptom::create([
            'symptoms_code' => 'G001',
            'symptoms' => 'Apakah anda mengalami Sakit Perut?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G002',
            'symptoms' => 'Apakah anda mengalami mual?'
        ]);
    }
}
