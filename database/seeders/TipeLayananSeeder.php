<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipe_layanan')->insert([
            [
                'id' => 1,
                'nama_layanan' => 'Regular',
                'waktu' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_layanan' => 'One Day',
                'waktu' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama_layanan' => 'Express',
                'waktu' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nama_layanan' => 'Quick',
                'waktu' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
