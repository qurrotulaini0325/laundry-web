<?php

namespace App\Http\Controllers;
use App\Models\ambil_layanan_satuan;
use App\Models\ambil_daily_kiloan;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $ambil_layanan_satuan = ambil_layanan_satuan::all();
        $ambil_daily_kiloan = ambil_daily_kiloan::all();
        return view('services', ['layanan_satuan' => $ambil_layanan_satuan, "daily_kiloan" =>$ambil_daily_kiloan]);
    }
}
