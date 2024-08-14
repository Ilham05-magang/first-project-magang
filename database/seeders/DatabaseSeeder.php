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
        DataSiswa::factory()->count(10)->create();
    }
}
