<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DailyKiloanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daily_kiloan')->insert([
            [
                'Layanan' => 'Cuci Kering',
                'Regular' => 5000,
                'One_Day' => 7500,
                'Express' => 10000,
                'Quick' => 12500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Layanan' => 'Cuci Kering & Gosok',
                'Regular' => 6000,
                'One_Day' => 9000,
                'Express' => 12000,
                'Quick' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Layanan' => 'Setrika',
                'Regular' => 5000,
                'One_Day' => 7500,
                'Express' => 10000,
                'Quick' => 12500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
