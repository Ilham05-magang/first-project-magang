<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataSiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Define an array of data to be inserted
        $data = [
            [
                'nama' => 'Ilham Maulana',
                'sekolah' => 'Universitas Negeri Semarang',
                'tempat_lahir' => 'Cirebon',
                'tanggal_lahir' => '2003-05-20',
                'keterangan' => 'jurusan teknik informatika'
            ],
            [
                'nama' => 'Ayu Lestari',
                'sekolah' => 'SMA Negeri 1 Jakarta',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2004-01-15',
                'keterangan' => 'jurusan teknik informatika'
            ],
            [
                'nama' => 'Budi Santoso',
                'sekolah' => 'SMA Negeri 2 Bandung',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2002-09-30',
                'keterangan' => 'jurusan teknik informatika'
            ],
            // Add more data as needed
        ];

        // Loop through the data and create records
        foreach ($data as $item) {
            DataSiswa::create($item);
        }
    }
}
