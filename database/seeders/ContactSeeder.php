<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact')->insert([
            [
                'tipe_sosmed' => 'NomorTelepon',
                'id_username' => '082141692127',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_sosmed' => 'NomorTelepon',
                'id_username' => '081252494067',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_sosmed' => 'Alamat',
                'id_username' => 'Jl. Terusan Venus No.63A, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_sosmed' => 'LinkMaps',
                'id_username' => 'https://maps.app.goo.gl/eZkheMqkfPs1Ym3v8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_sosmed' => 'Gmail',
                'id_username' => 'laundryassyifa@gmail.ocm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

