@extends('layouts.app')

@section('title', 'About Us')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<div class="hero page-inner overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center mt-5">
                <h1 class="heading text-white">Tentang Kami </h1>
            </div>
        </div>
    </div>
</div>

<!-- Profil Section -->
<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-wrap-2">
                    <img src="images/about.jpg" alt="Image" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="section-title">Profil Laundry</h2>
                <p>Assyifa Laundry Express adalah layanan laundry profesional yang berdedikasi untuk memberikan solusi terbaik dalam perawatan pakaian Anda. Didirikan dengan visi menjadi pionir dalam industri laundry, kami terus berinovasi untuk memberikan layanan berkualitas tinggi.</p>
                
                <div class="row my-5">
                    <div class="col-12">
                        <div class="feature">
                            <h3>Visi</h3>
                            <p>Menjadi penyedia layanan laundry terpercaya dengan standar kualitas tertinggi dan pelayanan prima untuk kepuasan pelanggan.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature">
                            <h3>Misi</h3>
                            <ul class="list-unstyled">
                                <li>• Memberikan layanan laundry profesional dengan hasil maksimal</li>
                                <li>• Menggunakan teknologi dan metode modern dalam proses pencucian</li>
                                <li>• Menjaga kepercayaan pelanggan melalui layanan yang konsisten</li>
                                <li>• Berkontribusi dalam menjaga kebersihan dan kesehatan masyarakat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12 mb-5">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            <div class="col-lg-12">
                <div class="accordion" id="accordionFAQ">
                    @foreach ($faq as $faqs)
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faqs->id }}">
                            {{ $faqs->Pertanyaan }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faqs->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            {{ $faqs->Jawaban }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection