<?php

namespace Database\Seeders;

use App\Models\DiagnoseResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnoseResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiagnoseResult::create([
            'user_id' => 1,
            'result' => 'Diabetes Gestational'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Negative'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Diabetes Gestational'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Diabetes Mellitus 1'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Negative'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Diabetes Mellitus 1'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Diabetes Mellitus 2'
        ]);
        DiagnoseResult::create([
            'user_id' => 2,
            'result' => 'Negative'
        ]);
    }
}
