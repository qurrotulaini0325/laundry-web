<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            [
                'Pertanyaan' => 'Apa saja jenis layanan yang tersedia di laundry ini?',
                'Jawaban' => "Kami menyediakan dua jenis layanan:\n\nLaundry Kiloan (Cuci Kering, Cuci Kering & Gosok, Setrika saja)\nLaundry Satuan (Bedcover, Sprei, Mukena, Sajadah, Handuk, Selimut, Jaket)",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apa perbedaan layanan Regular, One Day, Express, dan Quick?',
                'Jawaban' => "Perbedaannya terletak pada kecepatan pengerjaan dan tarif.\n\nRegular: 48 jam\nOne Day: 24 jam\nExpress: 5 jam\nQuick: Langsung diproses, selesai dalam hitungan jam tercepat (lebih cepat dari Express)",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Berapa tarif untuk layanan Laundry Kiloan?',
                'Jawaban' => "Contoh tarif:\nCuci Kering:\nRegular: Rp5.000\nOne Day: Rp7.500\nExpress: Rp10.000\nQuick: Rp12.500\n(Harga lengkap tersedia pada halaman \"Layanan dan Harga\")",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah bisa laundry hanya setrika saja?',
                'Jawaban' => 'Ya, tersedia layanan "Setrika Saja" untuk kiloan dengan tarif mulai dari Rp5.000 (Regular).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah ada layanan cuci bedcover dan barang besar lainnya?',
                'Jawaban' => "Ya, kami menerima item satuan seperti Bedcover, Sprei, Selimut, Jaket, dan lainnya.\nContoh:\nBedcover Regular: Rp25.000\nBedcover Quick: Rp62.500",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah semua layanan tersedia untuk semua jenis waktu (Regular, One Day, Express, Quick)?',
                'Jawaban' => 'Ya, semua layanan tersedia dalam keempat pilihan waktu. Harga menyesuaikan dengan tingkat kecepatan layanan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Bagaimana cara memesan layanan laundry?',
                'Jawaban' => 'Kamu bisa datang langsung ke outlet kami atau memesan antar-jemput melalui WhatsApp/Website.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah tersedia layanan antar-jemput?',
                'Jawaban' => 'Ya, kami menyediakan layanan antar-jemput (syarat dan ketentuan berlaku). Silakan hubungi kami untuk info lebih lanjut.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah ada minimal berat untuk laundry kiloan?',
                'Jawaban' => 'Ya, minimal berat laundry kiloan adalah 1 kg.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah pakaian akan dicampur dengan pelanggan lain?',
                'Jawaban' => 'Tidak. Kami menjamin bahwa pakaian setiap pelanggan akan dicuci secara terpisah dan aman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Apakah bisa laundry dalam keadaan mendesak?',
                'Jawaban' => 'Bisa! Gunakan layanan Express atau Quick untuk hasil yang lebih cepat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Pertanyaan' => 'Bagaimana saya bisa tahu status laundry saya?',
                'Jawaban' => 'Kami akan menginformasikan melalui WhatsApp saat laundry kamu selesai dan siap diambil atau dikirim.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
