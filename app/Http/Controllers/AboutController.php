<?php

namespace App\Http\Controllers;
use App\Models\ambil_faq;
use App\Models\ambil_contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $ambil_faq = ambil_faq::all();
        $nomor_telepon = ambil_contact::where('tipe_sosmed', 'NomorTelepon')
              ->pluck('id_username');
        return view('about', ['faq' => $ambil_faq, 'nomor_telepon' => $nomor_telepon]);
    }
}