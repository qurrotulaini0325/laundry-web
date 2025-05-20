<?php

namespace App\Http\Controllers;
use App\Models\ambil_layanan_satuan;
use App\Models\ambil_daily_kiloan;
use App\Models\ambil_contact;
use App\Models\ambil_tipe_layanan;
use App\Models\tipe_layanan;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $ambil_layanan_satuan = ambil_layanan_satuan::all();
        $ambil_daily_kiloan = ambil_daily_kiloan::all();
        $tipe_layanan = ambil_tipe_layanan::all();
        return view('reservation', [
            'layanan_satuan' => $ambil_layanan_satuan, 
            "daily_kiloan" => $ambil_daily_kiloan, 
            'tipe_layanan' => $tipe_layanan,
        ]);
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'service_type' => 'required|string|in:daily,satuan',
            'service_item' => 'required|string',
            'service_speed' => 'required|integer',
            'pickup_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);
        
        // Here you would save the reservation to your database
        // For now, we'll just redirect back with success message
        
        return redirect()->back()->with('success', 'Reservasi berhasil dibuat!');
    }
}