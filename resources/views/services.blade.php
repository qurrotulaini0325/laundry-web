@extends('layouts.app')

@section('title', 'Our Services')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')
<div class="container mt-4" data-aos="zoom-in" data-aos-duration="600">
    <div class="hero page-inner overlay hero-custom rounded-4 shadow-lg position-relative" style="height: 250px;">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="text-white fw-bold display-4"
                data-aos="fade-up"
                data-aos-delay="200"
                data-aos-duration="500">
                Layanan Kami
            </h1>
        </div>
    </div>
</div>

<div class="services-section py-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">

                {{-- Daily Kiloan --}}
                <div class="label-header mb-4"
                    data-aos="fade-right"
                    data-aos-delay="100"
                    data-aos-duration="500">
                    <h3 class="fw-bold">Daily Kiloan</h3>
                </div>
                <div class="table-responsive"
                    data-aos="fade-up"
                    data-aos-delay="150"
                    data-aos-duration="600">
                    <table class="table table-striped shadow rounded-3 overflow-hidden">
                        <thead class="text-white" style="background-color: #4eaaa4;"
                            data-aos="fade"
                            data-aos-delay="200"
                            data-aos-duration="500">
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
                            <tr data-aos="fade-up"
                                data-aos-delay="{{ 250 + ($index * 60) }}"
                                data-aos-duration="500">
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
                <div class="label-header mt-5 mb-4"
                    data-aos="fade-right"
                    data-aos-delay="100"
                    data-aos-duration="500">
                    <h3 class="fw-bold">Layanan Satuan</h3>
                </div>
                <div class="table-responsive"
                    data-aos="fade-up"
                    data-aos-delay="150"
                    data-aos-duration="600">
                    <table class="table table-striped shadow rounded-3 overflow-hidden">
                        <thead class="text-white" style="background-color: #4eaaa4;"
                            data-aos="fade"
                            data-aos-delay="200"
                            data-aos-duration="500">
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
                            <tr data-aos="fade-up"
                                data-aos-delay="{{ $layanan_satuans->Tipe === 'Selimut' ? 310 : 250 + ($index * 60) }}"
                                data-aos-duration="500"`>
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

                <div class="text-center mt-3"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="500">
                    <small class="text-muted fst-italic">* Prices are per kilogram</small>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
