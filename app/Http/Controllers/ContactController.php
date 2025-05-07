<?php

namespace App\Http\Controllers;
use App\Models\ambil_contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $ambil_contact = ambil_contact::all();
        return view('contact', ['contact' => $ambil_contact]);
    }
}
