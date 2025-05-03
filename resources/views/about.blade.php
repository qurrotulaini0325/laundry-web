@extends('layouts.app')

@section('title', 'About Us')

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
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Berapa lama waktu pengerjaan laundry?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Waktu pengerjaan standar adalah 2-3 hari. Untuk layanan express, kami menyediakan layanan selesai dalam 24 jam.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Apakah ada jaminan jika pakaian rusak atau hilang?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Ya, kami memberikan jaminan penggantian untuk pakaian yang rusak atau hilang sesuai dengan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Bagaimana cara melakukan reservasi?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Anda dapat melakukan reservasi melalui website kami atau menghubungi nomor customer service kami di +62 8123456789.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Apakah ada layanan antar-jemput?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Ya, kami menyediakan layanan antar-jemput gratis untuk area tertentu dan minimal berat laundry tertentu.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection