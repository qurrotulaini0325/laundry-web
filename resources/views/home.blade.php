@extends('layouts.app')

@section('title', 'Home')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('additional_js')
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script>
    const slider = tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplay: true,
        autoplayTimeout: 5000,
        speed: 400,
        controlsContainer: '#testimonial-nav',
        nav: false,
        autoplayButtonOutput: false,
        responsive: {
            768: {
                items: 1
            }
        }
    });
</script>

@endsection

@section('content')
<!-- Hero Section -->
<div class="hero" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                <div class="intro-excerpt">
                    <h1>No. 1 <span class="d-block">Laundry Express, Bersih, Rapi, Wangi</span></h1>
                    <p class="mb-4">Layanan laundry profesional dengan kualitas premium untuk memenuhi kebutuhan kebersihan pakaian Anda.</p>
                    <p>
                        <a href="/reservation" class="btn btn-secondary me-2" data-aos="zoom-in" data-aos-delay="500">Reservasi Sekarang</a>
                        <a href="/services" class="btn btn-white-outline" data-aos="zoom-in" data-aos-delay="700">Layanan Kami</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                <div class="hero-img-wrap">
                    <img src="images/laundry-hero.svg" class="img-fluid" alt="Laundry Hero">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="we-help-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="imgs-grid">
                    <div class="grid grid-1" data-aos="fade-up"><img src="images/iron.webp" alt="Iron"></div>
                    <div class="grid grid-2" data-aos="fade-up"><img src="images/laundry-basket.webp" alt="Laundry Basket"></div>
                    <div class="grid grid-3" data-aos="fade-up"><img src="images/washer.webp" alt="Washer"></div>
                </div>
            </div>
            <div class="col-12 col-lg-5 ps-lg-5" data-aos="fade-left">
                <h2 class="section-title mb-4">Laundry Bersih, Wangi, Higienis, dan Tepat Waktu</h2>
                <p>Assyifa Laundry Express adalah layanan laundry kiloan dan satuan. Kami adalah tim profesional yang selalu mengutamakan kualitas dan pelayanan dengan prinsip bersih, rapi, wangi, higienis & tepat waktu.</p>

                <ul class="list-unstyled custom-list my-4" data-aos="fade-left">
                    <li>Layanan premium dengan hasil bersih, rapi, dan wangi</li>
                    <li>Menggunakan deterjen dan pewangi berkualitas tinggi</li>
                    <li>Proses pencucian higienis dengan mesin modern</li>
                    <li>Pengerjaan tepat waktu dengan jaminan kepuasan</li>
                </ul>
                <p><a href="/about" class="btn btn-primary" data-aos="fade-left">Jelajahi Lebih Lanjut</a></p>
            </div>
        </div>
    </div>
</div>

<div class="features-area section">
  <div class="container">
    <h2 class="section-title text-center" data-aos="fade-up" data-aos-duration="800">Mengapa Harus Asyifa Laundry?</h2>
    <div class="features-inner">
      <div class="single-features" data-aos="fade-right" data-aos-delay="100">
        <div class="f-icon">
          <img src="images/truck.svg" alt="">
        </div>
        <h6>Antar Jemput</h6>
        <p>Gratis antar jemput sesuai area</p>
      </div>
      <div class="single-features" data-aos="fade-up" data-aos-delay="200">
        <div class="f-icon">
          <img src="images/material-symbols-light--bolt-outline-rounded.svg" alt="">
        </div>
        <h6>Cepat & Tepat Waktu</h6>
        <p>Pengerjaan cepat dan tepat waktu</p>
      </div>
      <div class="single-features" data-aos="fade-up" data-aos-delay="300">
        <div class="f-icon">
          <i class="fa-regular fa-clock"></i>
        </div>
        <h6>Layanan 24/7</h6>
        <p>Dukungan pelanggan 24 jam nonstop</p>
      </div>
      <div class="single-features" data-aos="fade-left" data-aos-delay="400">
        <div class="f-icon">
          <i class="fa-solid fa-spray-can-sparkles"></i>
        </div>
        <h6>Hasil Maksimal</h6>
        <p>Bersih Tuntas, Hasil Terbaik</p>
      </div>
    </div>
  </div>
</div>


<!-- Best Product Section -->
<div class="product-section">
  <div class="container">
    <div class="row">
      <!-- Judul dan Deskripsi -->
      <div class="col-md-12 col-lg-3 mb-5 mb-lg-0" data-aos="fade-right">
        <h2 class="mb-4 section-title-custom">Layanan Unggulan Kami</h2>
        <p class="mb-4">Berbagai layanan premium untuk memenuhi kebutuhan laundry Anda dengan hasil yang memuaskan.</p>
        <p><a href="/services" class="btn">Lihat Semua Layanan</a></p>
      </div>

      <!-- Cuci Setrika -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0" data-aos="zoom-in" data-aos-delay="100">
        <div class="product-item">
          <img src="images/cuci-setrika.svg" class="img-fluid product-thumbnail">
          <h3 class="product-title">Cuci Setrika</h3>
          <strong class="product-price">Mulai Rp 8.000/kg</strong>
        </div>
      </div>

      <!-- Layanan Express -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="product-item">
          <img src="images/express.svg" class="img-fluid product-thumbnail">
          <h3 class="product-title">Layanan Express</h3>
          <strong class="product-price">Mulai Rp 15.000/kg</strong>
        </div>
      </div>

      <!-- Premium Wash -->
      <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="product-item">
          <img src="images/premium.svg" class="img-fluid product-thumbnail">
          <h3 class="product-title">Premium Wash</h3>
          <strong class="product-price">Mulai Rp 20.000/kg</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonial Section -->
<div class="testimonial-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                <h2 class="section-title">Apa Kata Mereka?</h2>
            </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav" data-aos="fade-up" data-aos-delay="300">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item" data-aos="fade-in" data-aos-delay="400">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>“Awalnya coba karena males nyuci sendiri, eh ternyata enak banget! Dijemput, dicuci bersih, wangi, terus dianterin lagi ke rumah. Sekarang malah langganan tiap minggu.”</p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Rina Saputri</h3>
                                            <span class="position d-block mb-3">Mahasiswa – Malang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item" data-aos="fade-in" data-aos-delay="500">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>“Pelayanannya ramah dan cepet. Waktu itu cucian numpuk banget, tapi semua beres dalam sehari. Plus bisa request antar jemput, jadi nggak perlu repot keluar rumah.”</p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Dewi Lestari</h3>
                                            <span class="position d-block mb-3">Ibu Rumah Tangga – Malang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item" data-aos="fade-in" data-aos-delay="600">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>“Gue sempet ragu awalnya, tapi pas lihat hasilnya langsung puas. Baju jadi rapi banget, nggak ada bau apek, dan cepet banget prosesnya. Pokoknya recommended!”</p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Andi Pratama</h3>
                                            <span class="position d-block mb-3">Karyawan – Malang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .testimonial-slider -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section before-footer-section" data-aos="zoom-in-up" data-aos-delay="100">
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