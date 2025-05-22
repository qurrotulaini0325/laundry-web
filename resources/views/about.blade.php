@extends('layouts.app')

@section('title', 'About Us')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('additional_js')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection

@section('content')
<!-- Hero Section -->
<div class="container mt-4" data-aos="zoom-in" data-aos-duration="1200">
    <div class="hero page-inner overlay hero-custom rounded-4 shadow-lg position-relative" style="height: 250px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="text-white fw-bold display-4">Tentang Kami</h1>
        </div>
    </div>
</div>

<!-- Profil Section -->
<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                <div class="img-wrap-2">
                    <img src="images/about.webp" alt="Image" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                <h2 class="section-title">Profil Laundry</h2>
                <p>Assyifa Laundry Express adalah layanan laundry profesional yang berdedikasi untuk memberikan solusi terbaik dalam perawatan pakaian Anda. Didirikan dengan visi menjadi pionir dalam industri laundry, kami terus berinovasi untuk memberikan layanan berkualitas tinggi.</p>
                
                <div class="row my-5">
                    <div class="col-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="feature">
                            <h3>Visi</h3>
                            <p>Menjadi penyedia layanan laundry terpercaya dengan standar kualitas tertinggi dan pelayanan prima untuk kepuasan pelanggan.</p>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <div class="feature">
                            <h3>Misi</h3>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Memberikan layanan laundry profesional dengan hasil maksimal</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Menggunakan teknologi dan metode modern dalam proses pencucian</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Menjaga kepercayaan pelanggan melalui layanan yang konsisten</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Berkontribusi dalam menjaga kebersihan dan kesehatan masyarakat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title"
                    data-aos="zoom-in"
                    data-aos-duration="1000"
                    data-aos-delay="100">
                    Frequently Asked Questions
                </h2>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-10">
                <div class="faq-slider-wrap text-center position-relative"
                     data-aos="fade-up"
                     data-aos-duration="1200"
                     data-aos-delay="300"
                     data-aos-easing="ease-out-cubic">

                    <div class="swiper faq-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($faq->chunk(4) as $chunk)
                                <div class="swiper-slide">
                                    <div class="accordion" id="accordionFAQ{{ $loop->index }}">
                                        @foreach ($chunk as $faqs)
                                            <div class="accordion-item mb-2"
                                                 data-aos="fade-up"
                                                 data-aos-delay="{{ 100 * $loop->index }}"
                                                 data-aos-duration="800"
                                                 data-aos-offset="50"
                                                 data-aos-easing="ease-in-out">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed accordion-toggle-btn"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-{{ $loop->parent->index }}-{{ $faqs->id }}">
                                                        {{ $faqs->Pertanyaan }}
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $loop->parent->index }}-{{ $faqs->id }}"
                                                     class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionFAQ{{ $loop->parent->index }}">
                                                    <div class="accordion-body">
                                                        {{ $faqs->Jawaban }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="faq-button-prev custom-swiper-btn"
                         data-aos="fade-right"
                         data-aos-delay="500"
                         data-aos-duration="800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#549c99" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="15 18 9 12 15 6"/>
                        </svg>
                    </div>

                    <div class="faq-button-next custom-swiper-btn"
                         data-aos="fade-left"
                         data-aos-delay="500"
                         data-aos-duration="800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#549c99" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="9 6 15 12 9 18"/>
                        </svg>
                    </div>

                </div>

                <div class="swiper-pagination mt-4"
                     data-aos="zoom-in"
                     data-aos-delay="600"
                     data-aos-duration="700"></div>
            </div>
        </div>
    </div>
</div>
@endsection