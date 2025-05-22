<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ambil_layanan_satuan;
use App\Models\ambil_daily_kiloan;
use App\Models\Reservation;

class AdminController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display a listing of services
     */
    public function services()
    {
        $daily_kiloan = ambil_daily_kiloan::all();
        $layanan_satuan = ambil_layanan_satuan::all();
        
        return view('admin.services.index', compact('daily_kiloan', 'layanan_satuan'));
    }

    /**
     * Show the form for creating a new service
     */
    public function createService(Request $request)
    {
        $type = $request->query('type', 'daily'); // Default to daily if not specified
        return view('admin.services.create', compact('type'));
    }

    /**
     * Store a newly created service
     */
    public function storeService(Request $request)
    {
        $type = $request->input('type');

        if ($type === 'daily') {
            $request->validate([
                'Layanan' => 'required|string|max:255',
                'Regular' => 'required|numeric',
                'One_Day' => 'required|numeric',
                'Express' => 'required|numeric',
                'Quick' => 'required|numeric',
            ]);

            ambil_daily_kiloan::create($request->all());
            return redirect()->route('admin.services')->with('success', 'Layanan daily kiloan berhasil ditambahkan');
        } else {
            $request->validate([
                'Tipe' => 'required|string|max:255',
                'Regular' => 'required|numeric',
                'One_Day' => 'required|numeric',
                'Express' => 'required|numeric',
                'Quick' => 'required|numeric',
            ]);

            ambil_layanan_satuan::create($request->all());
            return redirect()->route('admin.services')->with('success', 'Layanan satuan berhasil ditambahkan');
        }
    }

    /**
     * Show the form for editing the service
     */
    public function editService($id, Request $request)
    {
        $type = $request->query('type', 'daily');
        
        if ($type === 'daily') {
            $service = ambil_daily_kiloan::findOrFail($id);
        } else {
            $service = ambil_layanan_satuan::findOrFail($id);
        }
        
        return view('admin.services.edit', compact('service', 'type'));
    }

    /**
     * Update the service
     */
    public function updateService($id, Request $request)
    {
        $type = $request->input('type');
        
        if ($type === 'daily') {
            $request->validate([
                'Layanan' => 'required|string|max:255',
                'Regular' => 'required|numeric',
                'One_Day' => 'required|numeric',
                'Express' => 'required|numeric',
                'Quick' => 'required|numeric',
            ]);
            
            $service = ambil_daily_kiloan::findOrFail($id);
            $service->update($request->all());
            
            return redirect()->route('admin.services')->with('success', 'Layanan daily kiloan berhasil diperbarui');
        } else {
            $request->validate([
                'Tipe' => 'required|string|max:255',
                'Regular' => 'required|numeric',
                'One_Day' => 'required|numeric',
                'Express' => 'required|numeric',
                'Quick' => 'required|numeric',
            ]);
            
            $service = ambil_layanan_satuan::findOrFail($id);
            $service->update($request->all());
            
            return redirect()->route('admin.services')->with('success', 'Layanan satuan berhasil diperbarui');
        }
    }

    /**
     * Delete the service
     */
    public function deleteService($id, Request $request)
    {
        $type = $request->input('type', 'daily');
        
        if ($type === 'daily') {
            $service = ambil_daily_kiloan::findOrFail($id);
            $service->delete();
            return redirect()->route('admin.services')->with('success', 'Layanan daily kiloan berhasil dihapus');
        } else {
            $service = ambil_layanan_satuan::findOrFail($id);
            $service->delete();
            return redirect()->route('admin.services')->with('success', 'Layanan satuan berhasil dihapus');
        }
    }

    public function reservations()
    {
        $reservations = Reservation::orderBy('created_at', 'asc')->get();
        return view('admin.reservations.index', compact('reservations'));
    }
}