@extends('layouts.app')

@section('title', 'Our Services')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')
<div class="container mt-4" data-aos="zoom-in" data-aos-duration="1200">
    <div class="hero page-inner overlay hero-custom rounded-4 shadow-lg position-relative" style="height: 250px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="text-white fw-bold display-4" data-aos="flip-up" data-aos-delay="400">Layanan Kami</h1>
        </div>
    </div>
</div>

<div class="services-section py-5" data-aos="fade-up" data-aos-delay="300">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">

                {{-- Daily Kiloan --}}
                <div class="label-header mb-4" data-aos="fade-right" data-aos-delay="500">
                    <h3 class="fw-bold">Daily Kiloan</h3>
                </div>
                <div class="table-responsive" data-aos="fade-up-left" data-aos-delay="600">
                    <table class="table table-striped shadow rounded-3 overflow-hidden">
                        <thead class="text-white" style="background-color: #4eaaa4;">
                            <tr>
                                <th>Service</th>
                                <th>Regular</th>
                                <th>One Day</th>
                                <th>Express</th>
                                <th>Quick</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daily_kiloan as $index => $daily_kiloans)
                            <tr data-aos="fade-right" data-aos-delay="{{ 100 * $index + 700 }}">
                                <th>{{ $daily_kiloans->Layanan }}</th>
                                <td>Rp {{ number_format($daily_kiloans->Regular, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($daily_kiloans->One_Day, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($daily_kiloans->Express, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($daily_kiloans->Quick, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Layanan Satuan --}}
                <div class="label-header mt-5 mb-4" data-aos="fade-down-right" data-aos-delay="800">
                    <h3 class="fw-bold">Layanan Satuan</h3>
                </div>
                <div class="table-responsive" data-aos="zoom-in-up" data-aos-delay="900">
                    <table class="table table-striped shadow rounded-3 overflow-hidden">
                        <thead class="text-white" style="background-color: #4eaaa4;">
                            <tr>
                                <th>Service</th>
                                <th>Regular</th>
                                <th>One Day</th>
                                <th>Express</th>
                                <th>Quick</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan_satuan as $index => $layanan_satuans)
                            <tr data-aos="fade-left" data-aos-delay="{{ 100 * $index + 1000 }}">
                                <th>{{ $layanan_satuans->Tipe }}</th>
                                <td>Rp {{ number_format($layanan_satuans->Regular, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($layanan_satuans->One_Day, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($layanan_satuans->Express, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($layanan_satuans->Quick, 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-3" data-aos="fade-in" data-aos-delay="1400">
                    <small class="text-muted fst-italic">* Prices are per kilogram</small>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
