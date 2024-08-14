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
        //melakukan pengulangan atau merandom data yang sudah di setting di seed
        DataSiswa::factory()->count(10)->create();
    }
}
