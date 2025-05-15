<?php

namespace App\Http\Controllers;
use App\Models\ambil_layanan_satuan;
use App\Models\ambil_daily_kiloan;
use App\Models\ambil_contact;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $ambil_layanan_satuan = ambil_layanan_satuan::all();
        $ambil_daily_kiloan = ambil_daily_kiloan::all();
        $nomor_telepon = ambil_contact::where('tipe_sosmed', 'NomorTelepon')
              ->pluck('id_username');
        return view('reservation', ['layanan_satuan' => $ambil_layanan_satuan, "daily_kiloan" =>$ambil_daily_kiloan, 'nomor_telepon' => $nomor_telepon]);
    }
}
