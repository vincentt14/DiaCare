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
            'symptoms' => 'Apakah umur anda dibawah 17 tahun?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G02',
            'symptoms' => 'Apakah anda sedang hamil?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G03',
            'symptoms' => 'Apakah mata anda sering kelelahan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G04',
            'symptoms' => 'Apakah anda mengalami obesitas?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G05',
            'symptoms' => 'Apakah anda mudah merasa haus (polydipsi)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G06',
            'symptoms' => 'Apakah anda mudah merasa lapar (polifagia)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G07',
            'symptoms' => 'Apakah anda sering buang air kecil (polipuria)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G08',
            'symptoms' => 'Apakah anda sering mengalami kesemutan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G09',
            'symptoms' => 'Apakah anda sering mengalami pusing?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G10',
            'symptoms' => 'Apakah anda mengalami rasa gatal disekitar kemaluan?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G11',
            'symptoms' => 'Apakah anda mengalami disfungsi Ereksi (untuk pria)?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G12',
            'symptoms' => 'Apakah anda mengalami keputihan karena kelainan pada ginjal?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G13',
            'symptoms' => 'Apakah luka yang anda alami sukar sembuh?'
        ]);
        Symptom::create([
            'symptoms_code' => 'G14',
            'symptoms' => 'Apakah nafas anda seperti wangi buah?'
        ]);
    }
}
