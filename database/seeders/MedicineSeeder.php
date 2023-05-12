<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicine::create([
            'disease_id' => 2,
            'name' => 'Insulin Basal',
            'description' => 'Insulin Basal merupakan jenis insulin kerja menengah atau long-acting insulin, merupakan jenis insulin yang umumnya diberikan kepada penderita diabetes yang baru pertama kali menggunakan insulin.',
            'composition' => 'Insulin Degludec dan Insulin Glargine U-300.',
            'dose' => 'diberikan satu kali injeksi pada saat setelah makan dalam sehari.'
        ]);
        Medicine::create([
            'disease_id' => 2,
            'name' => 'Insulin Pradinal',
            'description' => 'Insulin Prandial merupakan jenis insulin kerja sangat cepat diindikasikan pada pasien dengan kadar HbA1c tetap tinggi meskipun mencapai kadar glukosa puasa dengan menggunakan insulin basal.',
            'composition' => 'Insulin Lispro, Insulin Aspart, dan Insulin Glulisine.',
            'dose' => 'diberikan satu kali injeksi dalam sehari.'
        ]);
        Medicine::create([
            'disease_id' => 2,
            'name' => 'Insulin Premix',
            'description' => 'Insulin Premixed merupakan jenis insulin campuran yaitu campuran fixed insulin Basal dan Prandial.',
            'composition' => 'Insulin Degludeg dan Insulin Aspart.',
            'dose' => 'diberikan dua kali injeksi dalam sehari.'
        ]);
        Medicine::create([
            'disease_id' => 3,
            'name' => 'Norizec',
            'description' => 'NORIZEC TABLET merupakan obat anti diabetes mengandung Glimepiride yang termasuk ke dalam golongan sulfonilurea. Norizec digunakan sebagai obat anti diabetes mellitus tipe 2 atau Non-Insulin-Dependent (type II) Diabetes Melitus (NIDDM) dimana kadar glukosa darah tidak dapat hanya dikontrol dengan diet dan olahraga saja.',
            'composition' => 'Setiap kaplet mengandung Glimepiride 2 mg.',
            'dose' => 'Dosis awal: 1-2 mg, satu kali sehari - Dosis pemeliharaan: 1-4 mg, satu kali sehari, dosis maksimum 8 mg.'
        ]);
        Medicine::create([
            'disease_id' => 3,
            'name' => 'Acarbose',
            'description' => 'ACARBOSE TABLET merupakan obat yang digunakan untuk pasien diabetes melitus yang tidak dapat diatur hanya dengan diet saja. Obat ini termasuk dalam golongan penghambat alfa glukosidase dan bekerja dengan cara memperlambat penyerapan glukosa dalam usus halus, sehingga memberikan efek menurunkan kadar glukosa darah sesudah makan.',
            'composition' => 'Setiap kaplet mengandung Acarbose 100 mg.',
            'dose' => 'Dosis awal: 3 kali sehari 50 mg. Dosis selanjutnya: 3 kali sehari 100-200 mg.'
        ]);
        Medicine::create([
            'disease_id' => 3,
            'name' => 'Galvusmet',
            'description' => 'Galvusmet adalah obat yang mengandung zat aktif Vildagliptin dan Metformin HCl.Metformin adalah agen antidiabetes biguanide yang mengurangi produksi glukosa hati melalui penghambatan glukoneogenesis dan glikogenolisis, meningkatkan pemanfaatan perifer dan penyerapan glukosa dengan meningkatkan sensitivitas insulin, dan menunda penyerapan glukosa usus.',
            'composition' => 'Setiap kaplet mengandung Vildagliptin 50 mg, Metformin HCl 850 mg.',
            'dose' => 'Dewasa : 2 kali sehari 1 tablet (pagi dan sore).'
        ]);
        Medicine::create([
            'disease_id' => 3,
            'name' => 'Pioglitazone',
            'description' => 'PIOGLITAZONE merupakan obat yang digunakan untuk menangani penyakit diabetes tipe 2. Obat ini digunakan sebagai terapi kombinasi dengan sulfonilurea atau metformin pada pasien diabetes melitus tipe 2 yang tidak terkontrol dengan monoterapi sulfonilurea dan metformin.',
            'composition' => 'Setiap kaplet mengandung Pioglitazone HCl 30 mg',
            'dose' => 'Monoterapi : 15 atau 30 mg sekali sehari. Kombinasi dengan Metformin atau Sulfonilurea : 15 atau 30 mg sekali sehari.'
        ]);
        Medicine::create([
            'disease_id' => 3,
            'name' => 'Diamicron',
            'description' => 'DIAMICRON MR TABLET merupakan sediaan tablet Modified Relesase dengan kandungan Gliclazide yang termasuk dalam obat anti diabetes golongan sulfonilurea. Obat ini digunakan pada pasien Diabetes Melitus tipe 2 atau Non-Insulin-Dependent (type II).',
            'composition' => 'Setiap kaplet mengandung Gliclazide 60 mg.',
            'dose' => 'Dosis dapat diawali dengan 30 mg per hari dan dapat ditingkatkan hingga dosis maksimum 120 mg per hari.'
        ]);
        Medicine::create([
            'disease_id' => 4,
            'name' => 'Metformin',
            'description' => 'Obat antidiabetes generik yang dapat mengontrol dan menurunkan kadar gula darah pada penderita diabetes tipe gestasional. Metformin termasuk ke dalam obat antidiabetes golongan Biguanide, yang bekerja dengan cara menghambat produksi glukosa (glukoneogenesis) di hati. Metformin juga bekerja dengan memperbaiki sensitivitas insulin dengan cara meningkatkan ambilan dan penggunaan glukosa di jaringan perifer.',
            'composition' => 'Setiap kaplet mengandung Metformin 500 mg.',
            'dose' => 'Sehari 2 x 500 mg atau 2 x 850 mg. Dosis dapat ditingkatkan sesuai dengan respon pasien. Dosis maksimal 3000 mg/hari.'
        ]);
        Medicine::create([
            'disease_id' => 4,
            'name' => 'Glibenclamide',
            'description' => 'obat anti diabetes tipe gestasional yang termasuk golongan sulfonilurea. glibenclamide menurunkan kadar gula darah dengan cara meningkatkan kalsium intraseluler dalam sel beta pankreas sehingga menstimulasi produksi insulin. Glibenclamide da[at di gunakan sebagai terapi tunggal atau kombinasi dengan obat anti diabetes oral lainnya.',
            'composition' => 'Setiap kaplet mengandung Glibenclamide 5 mg.',
            'dose' => 'Dosis awal 1 kaptab sehari sesudah makan pagi, setiap 7 hari ditingkatkan dengan 1/2 - 1 kaptab sehari sampai kontrol metabolit optimal tercapai.'
        ]);
    }
}