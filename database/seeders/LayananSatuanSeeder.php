<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan_satuan')->insert([
            [
                'Tipe' => 'Bedcover',
                'Regular' => 25000,
                'One_Day' => 37500,
                'Express' => 50000,
                'Quick' => 62500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Sprei',
                'Regular' => 8000,
                'One_Day' => 12000,
                'Express' => 16000,
                'Quick' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Mukena',
                'Regular' => 8000,
                'One_Day' => 12000,
                'Express' => 16000,
                'Quick' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Sajadah',
                'Regular' => 6000,
                'One_Day' => 9000,
                'Express' => 12000,
                'Quick' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Handuk',
                'Regular' => 5000,
                'One_Day' => 7500,
                'Express' => 10000,
                'Quick' => 12500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Selimut',
                'Regular' => 10000,
                'One_Day' => 15000,
                'Express' => 20000,
                'Quick' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Tipe' => 'Jaket',
                'Regular' => 7000,
                'One_Day' => 10500,
                'Express' => 14000,
                'Quick' => 17500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
