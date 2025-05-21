<?php

namespace App\Http\Controllers;
use App\Models\ambil_layanan_satuan;
use App\Models\ambil_daily_kiloan;
use App\Models\ambil_tipe_layanan;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $daily_kiloan = ambil_daily_kiloan::all();
        $layanan_satuan = ambil_layanan_satuan::all();
        $tipe_layanan = ambil_tipe_layanan::all();
        
        return view('reservation', compact('daily_kiloan', 'layanan_satuan', 'tipe_layanan'));
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'service_type' => 'required|in:daily,satuan',
            'service_item' => 'required|string',
            'service_speed' => 'required|in:Regular,One_Day,Express,Quick',
            'pickup_date' => 'required|date',
            'notes' => 'nullable|string'
        ]);
    
        // Get service price based on type and speed
        if ($validated['service_type'] === 'daily') {
            $service = ambil_daily_kiloan::where('Layanan', $validated['service_item'])->first();
        } else {
            $service = ambil_layanan_satuan::where('Tipe', $validated['service_item'])->first();
        }
    
        if (!$service) {
            return redirect()->back()->with('error', 'Layanan tidak ditemukan!');
        }
    
        $price = $service->{$validated['service_speed']};
        $data = $request->all();
        $data['price'] = $price;

        Reservation::create($data);

        $nomorTujuan = '6285694250087';
        $pesan = "*Reservasi Laundry* \n\n"
            . "Nama: {$request->name}\n"
            . "Tipe Paket: {$request->service_type}\n"
            . "Nama Paket: {$request->service_item}\n"
            . "Kecepatan: {$request->service_speed}\n"
            . "Tanggal Ambil: {$request->pickup_date}\n"
            . "Catatan: {$request->notes}\n";
    
        $urlWhatsapp = 'https://wa.me/' . $nomorTujuan . '?text=' . urlencode($pesan);
        
        return redirect()->back()
        ->with('success', 'Reservasi berhasil dibuat!')
        ->with('wa_url', $urlWhatsapp);
    }
}