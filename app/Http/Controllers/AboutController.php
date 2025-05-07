<?php

namespace App\Http\Controllers;
use App\Models\ambil_faq;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $ambil_faq = ambil_faq::all();
        return view('about', ['faq' => $ambil_faq]);
    }
}