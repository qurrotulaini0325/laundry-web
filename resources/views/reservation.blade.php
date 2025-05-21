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
                    
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('wa_url'))
                    <script>
                        window.open("{{ session('wa_url') }}", "_blank");
                    </script>
                    @endif
                    
                    <form class="reservation-form p-4 bg-white rounded shadow-sm" method="POST" action="{{ route('reservation.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="service_type" class="form-label">Tipe Paket</label>
                            <select class="form-control @error('service_type') is-invalid @enderror" id="service_type" name="service_type" required>
                                <option value="">Pilih tipe paket</option>
                                <option value="daily" {{ old('service_type') == 'daily' ? 'selected' : '' }}>Kiloan</option>
                                <option value="satuan" {{ old('service_type') == 'satuan' ? 'selected' : '' }}>Satuan</option>
                            </select>
                            @error('service_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="service_item" class="form-label">Jenis Layanan</label>
                            <select class="form-control @error('service_item') is-invalid @enderror" id="service_item" name="service_item" required data-old-value="{{ old('service_item') }}">
                                <option value="">Pilih jenis layanan</option>
                            </select>
                            @error('service_item')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="service_speed" class="form-label">Kecepatan Layanan</label>
                            <select class="form-control @error('service_speed') is-invalid @enderror" id="service_speed" name="service_speed" required>
                                <option value="">Pilih kecepatan layanan</option>
                                @foreach($tipe_layanan as $tipe)
                                    <option value="{{ $tipe->nama_layanan }}" {{ old('service_speed') == $tipe->nama_layanan ? 'selected' : '' }}>{{ $tipe->nama_layanan }} ({{ $tipe->waktu }} jam)</option>
                                @endforeach
                            </select>
                            @error('service_speed')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="pickup_date" class="form-label">Waktu Pengambilan</label>
                            <input type="date" class="form-control @error('pickup_date') is-invalid @enderror" id="pickup_date" name="pickup_date" required value="{{ old('pickup_date') }}">
                            @error('pickup_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="notes" class="form-label">Catatan</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3" placeholder="Tambahkan catatan khusus untuk layanan Anda">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

@push('scripts')
<script src="{{ asset('js/reservation.js') }}"></script>
@endpush

<!-- Hidden data for JavaScript -->
<div id="layanan-data" 
    data-daily='@json($daily_kiloan)' 
    data-satuan='@json($layanan_satuan)' 
    style="display: none;">
</div>