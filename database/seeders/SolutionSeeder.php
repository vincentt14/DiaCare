<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solution::create([
            'disease_id' => 1,
            'solution' => 'Perbanyak istirahat dan minum air putih',
        ]);
        Solution::create([
            'disease_id' => 2,
            'solution' => 'Jaga pola makan',
        ]);
        Solution::create([
            'disease_id' => 2,
            'solution' => 'Ganti gula jadi tropicana',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Jaga pola makan',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Olahraga setiap hari',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Ganti gula jadi tropicana',
        ]);
        Solution::create([
            'disease_id' => 4,
            'solution' => 'Konsumsi banyak buah buahan',
        ]);
        Solution::create([
            'disease_id' => 4,
            'solution' => 'Ganti gula jadi tropicana',
        ]);
    }
}
