<?php

namespace Database\Seeders;

use App\Models\Medicines;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicines::create([
            'name' => 'Panadol',
            'description' => 'PANADOL merupakan obat dengan kandungan Paracetamol yang dapat digunakan untuk meringankan rasa sakit pada sakit kepala, sakit gigi, sakit pada otot dan menurunkan demam. Paracetamol bekerja pada pusat pengatur suhu di hipotalamus untuk menurunkan suhu tubuh (antipiretik) serta menghambat sintesis prostaglandin sehingga dapat mengurangi nyeri ringan sampai sedang (analgesik).',
            'composition' => 'Setiap kaplet mengandung Paracetamol 500 mg',
            'dose' => 'Dewasa dan anak usia lebih dari 12 tahun : 1 - 2 kaplet, 3-4 kali sehari'
        ]);
        Medicines::create([
            'name' => 'Diagit',
            'description' => 'DIAGIT TABLET merupakan obat yang digunakan untuk pengobatan simptomatik diare nonspesifik. DIAGIT TABLET mengandung konmbinasi Attapulgite dan Pectin.',
            'composition' => 'Setiap kaplet mengandung Attapulgite 600 mg, Pectin 50 mg',
            'dose' => 'Dewasa dan Anak > 12 tahun : 2 tablet tiap kali sesudah BAB. Maksimal 12 tablet/hari. Anak 6-12 tahun : 1 tablet tiap kali sesudah BAB. Maksimal 6 tablet/hari.'
        ]);
    }
}