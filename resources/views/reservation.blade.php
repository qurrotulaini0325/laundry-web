@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')
<div class="hero page-inner overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading text-white">Make a Reservation</h1>
                <p class="text-white-50 mb-4">Book your laundry service with us today.</p>
            </div>
        </div>
    </div>
</div>

<div class="reservation-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="reservation-form-wrapper">
                    <h2 class="section-title mb-4">Book Your Service</h2>
                    <form class="reservation-form p-4 bg-white rounded shadow-sm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Jenis Layanan</label>
                            <select class="form-control" id="service" required>
                                <option value="">Pilih layanan</option>
                                <option value="wash-iron">Cuci & Setrika</option>
                                <option value="express">Layanan Express</option>
                                <option value="premium">Premium Care</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pickup-date" class="form-label">Waktu Pengambilan</label>
                            <input type="date" class="form-control" id="pickup-date" required>
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label">Catatan</label>
                            <textarea class="form-control" id="notes" rows="3" placeholder="Tambahkan catatan khusus untuk layanan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 text-center">
                <div class="illustration-wrapper">
                    <img src="images/washer2.png" alt="Laundry Illustration" class="img-fluid">
                    <div class="features mt-4">
                        <div class="feature-item mb-3">
                            <i class="fa fa-check-circle text-primary"></i>
                            <span>Layanan profesional dan terpercaya</span>
                        </div>
                        <div class="feature-item mb-3">
                            <i class="fa fa-clock text-primary"></i>
                            <span>Pengerjaan tepat waktu</span>
                        </div>
                        <div class="feature-item">
                            <i class="fa fa-star text-primary"></i>
                            <span>Kepuasan pelanggan terjamin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection