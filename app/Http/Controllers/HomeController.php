<?php

namespace App\Http\Controllers;
use App\Models\ambil_tipe_layanan;
use App\Models\ambil_contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ambil_tipe_layanan = ambil_tipe_layanan::all();
        $nomor_telepon = ambil_contact::where('tipe_sosmed', 'NomorTelepon')
              ->pluck('id_username');
        return view('home', ['tipe_layanan' => $ambil_tipe_layanan, 'nomor_telepon' => $nomor_telepon]);
    }   
}