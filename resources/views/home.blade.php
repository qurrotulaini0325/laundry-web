@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>No. 1 <span class="d-block">Laundry Express <span></span>Bersih, Rapi, Wangi</span></h1>
                    <p class="mb-4">Layanan laundry profesional dengan kualitas premium untuk memenuhi kebutuhan kebersihan pakaian Anda.</p>
                    <p><a href="/reservation" class="btn btn-secondary me-2">Reservasi Sekarang</a><a href="/layanan" class="btn btn-white-outline">Layanan Kami</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="images/laundry-hero.svg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overview Laundry Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Laundry Bersih, Wangi, Higienis, dan Tepat Waktu</h2>
                <p>Assyifa Laundry Express adalah layanan laundry kiloan dan satuan. Kami adalah tim profesional yang selalu mengutamakan kualitas dan pelayanan dengan prinsip bersih, rapi, wangi, higienis & tepat waktu.</p>
                <p class="mb-4">Assyifa Laundry Express menerima laundry kiloan untuk perusahaan, misal kantor, rumah sakit, asrama, pesantren, sekolah, perusahaan konveksi atau perusahaan-perusahaan sejenisnya. Silakan hubungi kami untuk penawaran harga khusus dengan kontrak minimal 3 bulan.</p>
                <!-- <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="fa fa-info-circle me-2"></i>
                    <div>Maksimalkan waktu berharga Anda, biarkan Tim Profesional kami yang mengurus untuk Anda!</div>
                </div> -->

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Antar Jemput</h3>
                            <p>Layanan antar jemput gratis untuk area tertentu.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/material-symbols-light--bolt-outline-rounded.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Cepat & Tepat Waktu</h3>
                            <p>Layanan pengerjaan cepat dengan ketepatan waktu yang terjamin.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Layanan 24/7</h3>
                            <p>Dukungan pelanggan 24 jam untuk membantu kebutuhan Anda.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/return.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Hasil Maksimal</h3>
                            <p>Menggunakan deterjen berkualitas dan peralatan modern untuk hasil terbaik.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/about.png" alt="Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Best Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Layanan Unggulan Kami</h2>
                <p class="mb-4">Berbagai layanan premium untuk memenuhi kebutuhan laundry Anda dengan hasil yang memuaskan.</p>
                <p><a href="/layanan" class="btn">Lihat Semua Layanan</a></p>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="/layanan/cuci-setrika">
                    <img src="images/cuci-setrika.svg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Cuci Setrika</h3>
                    <strong class="product-price">Mulai Rp 8.000/kg</strong>
                </a>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="/layanan/express">
                    <img src="images/express.svg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Layanan Express</h3>
                    <strong class="product-price">Mulai Rp 15.000/kg</strong>
                </a>
            </div>

            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="/layanan/premium">
                    <img src="images/premium.svg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Premium Wash</h3>
                    <strong class="product-price">Mulai Rp 20.000/kg</strong>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Maria Jones</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="blog-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Siap Untuk Mencoba Layanan Kami?</h2>
                <p class="mb-4">Dapatkan pengalaman laundry terbaik dengan pelayanan profesional kami.</p>
                <p><a href="/reservation" class="btn btn-primary">Reservasi Sekarang</a></p>
            </div>
        </div>
    </div>
</div>
@endsection