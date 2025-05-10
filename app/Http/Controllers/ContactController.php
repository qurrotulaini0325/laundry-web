<?php

namespace App\Http\Controllers;
use App\Models\ambil_contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $ambil_contact = ambil_contact::all();
        $nomor_telepon = ambil_contact::where('tipe_sosmed', 'NomorTelepon')
              ->pluck('id_username');
        $alamat = ambil_contact::where('tipe_sosmed', 'Alamat')
              ->value('id_username');
        $link_maps = ambil_contact::where('tipe_sosmed', 'LinkMaps')
              ->value('id_username');
        $gmail = ambil_contact::where('tipe_sosmed', 'Gmail')
              ->value('id_username');
        return view('contact', ['contact' => $ambil_contact, 'nomor_telepon' => $nomor_telepon, 'alamat'=> $alamat, 'link_maps'=>$link_maps, 'gmail'=>$gmail]);
    }
}
