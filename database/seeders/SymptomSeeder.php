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
            'symptoms_code' => 'G01',
            'symptoms' => 'Apakah anda mengalami kelainan pada kulit menjadi kering?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G02',
            'symptoms' => 'Apakah anda sering buang air kecil (polipuria)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G03',
            'symptoms' => 'Apakah anda sering makan (polifagia)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G04',
            'symptoms' => 'Apakah anda merasa kesemutan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G05',
            'symptoms' => 'Apakah anda sering mengalami kram pada otot?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G06',
            'symptoms' => 'Apakah tubuh anda sering muncul bisul?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G07',
            'symptoms' => 'Apakah luka yang anda alami sukar sembuh?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G08',
            'symptoms' => 'Apakah anda mengalami keputihan karena kelainan pada ginjal?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G09',
            'symptoms' => 'Apakah berat badan anda turun secara tiba-tiba tanpa alasan jelas?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G10',
            'symptoms' => 'Apakah anda mengalami rasa gatal disekitar kemaluan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G11',
            'symptoms' => 'Apakah tubuh anda terasa cepat lebih lemah?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G12',
            'symptoms' => 'Apakah anda sering mengalami gelisah?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G13',
            'symptoms' => 'Apakah anda sering mengalami pingsan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G14',
            'symptoms' => 'Apakah anda sering mengalami pusing?'
        ]);
    }
}
