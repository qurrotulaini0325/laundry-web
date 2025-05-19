<?php

namespace App\Http\Controllers;
use App\Models\ambil_contact;
use App\Models\Helpdesk;
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

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string'
        ]);
        
        Helpdesk::create($request->all());

        $nomorTujuan = '6285694250087';
        $pesan = "*{$request->subjek}* \n\n"
            . "Nama: {$request->nama_lengkap}\n"
            . "Email: {$request->email}\n"
            . "Pesan: {$request->pesan}";
    
        $urlWhatsapp = 'https://wa.me/' . $nomorTujuan . '?text=' . urlencode($pesan);
        
        return redirect()->back()
        ->with('success', 'Pesan Anda telah berhasil dikirim!')
        ->with('wa_url', $urlWhatsapp);
    }
}

