<?php

namespace App\Http\Controllers;
use App\Models\ambil_tipe_layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ambil_tipe_layanan = ambil_tipe_layanan::all();
        return view('home', ['tipe_layanan' => $ambil_tipe_layanan]);
    }   
}

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::view('/services', 'services')->name('services');
// Route::view('/reservation', 'reservation')->name('reservation');
// Route::view('/contact', 'contact')->name('contact');