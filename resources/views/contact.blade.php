@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mt-4" data-aos="fade-zoom-in" data-aos-duration="1200">
    <div class="hero page-inner overlay hero-custom rounded-4 shadow-lg position-relative" style="height: 250px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="text-white fw-bold display-4" data-aos="zoom-in" data-aos-delay="400">Hubungi Kami</h1>
        </div>
    </div>
</div>

<div class="contact-section py-5">
    <div class="container">
        <div class="row">
            {{-- Form --}}
            <div class="col-lg-6 mb-4" data-aos="fade-up-right" data-aos-delay="300">
                <h3 class="mb-4">Butuh Bantuan? Tulis Pesan di Sini</h3>
                <form class="contact-form" method="POST" action="{{ route('contact') }}">
                    @csrf
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-down">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('wa_url'))
                    <script>
                        window.open("{{ session('wa_url') }}", "_blank");
                    </script>
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="name" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                        @error('nama_lengkap')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control @error('subjek') is-invalid @enderror" id="subject" name="subjek" value="{{ old('subjek') }}" required>
                        @error('subjek')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Isi Pesan</label>
                        <textarea class="form-control @error('pesan') is-invalid @enderror" id="message" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

            <div class="col-lg-5 offset-lg-1" data-aos="fade-left" data-aos-delay="600">
                <h3 class="mb-4">Informasi Kontak</h3>
                <div class="contact-info mt-3">
                    <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="1000">
                        <i class="fas fa-clock fa-lg me-3 mt-1 text-warning"></i>
                        <div>
                            <h5 class="mb-1">Jam Kerja</h5>
                            <p>Senin - Sabtu: 8:00 - 20:00<br>Minggu: 10:00 - 20:00</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="700">
                        <i class="fas fa-map-marker-alt fa-lg me-3 mt-1 text-primary"></i>
                        <div>
                            <h5 class="mb-1">Alamat</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.638889256491!2d112.6025310747676!3d-7.932730992091156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882107e8523b7%3A0xce17daa5952e8828!2sLaundry%20Asyifa!5e0!3m2!1sen!2sid!4v1747903125597!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection