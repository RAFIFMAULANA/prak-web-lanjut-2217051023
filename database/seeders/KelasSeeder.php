<?php

namespace App\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        // Data kelas yang akan dimasukkan ke tabel kelas
        $data = [
            'A',
            'B',
            'C',
            'D',
        ];

        // Loop untuk memasukkan data kelas
        foreach ($data as $kelas) {
            Kelas::create([
                'nama_kelas' => $kelas,
            ]);
        }
    }
}
