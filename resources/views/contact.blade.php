@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="hero page-inner overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading text-white">Hubungi Kami</h1>
                <p class="text-white-50 mb-4">Terhubunglah dengan kami untuk pertanyaan, bantuan, atau informasi lebih lanjut.</p>
            </div>
        </div>
    </div>
</div>

<div class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3>Butuh Bantuan? Tulis Pesan di Sini</h3>
                <form class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Isi Pesan</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <h3>Informasi Kontak</h3>

                <div class="contact-info mt-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                        <div>
                            <h5>Alamat</h5>
                            <p>{{ $alamat }}</p>
                            <a href="{{ $link_maps }}">{{ $link_maps }}</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone-alt me-3 mt-1"></i>
                        <div>
                            <h5>Nomor Telepon</h5>
                            @foreach ($nomor_telepon as $nomor_telepons)
                            <p>{{ $nomor_telepons }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope me-3 mt-1"></i>
                        <div>
                            <h5>Email</h5>
                            <p>{{ $gmail }}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-clock me-3 mt-1"></i>
                        <div>
                            <h5>Jam Kerja</h5>
                            <p>Senin - Sabtu: 8:00 - 20:00<br>Minggu: 10:00 - 20:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection