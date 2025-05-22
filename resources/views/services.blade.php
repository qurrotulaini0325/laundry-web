@extends('layouts.app')

@section('title', 'Our Services')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')
<div class="hero page-inner overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center mt-5">
                <h1 class="heading text-white">Layanan Kami </h1>
                <p class="text-white-50 mb-4">Kami menyediakan layanan laundry profesional untuk menjaga pakaian kamu tetap bersih.</p>
            </div>
        </div>
    </div>
</div>

<div class="services-section py-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="label-header">
                    <h3>Daily Kiloan</h3>
                </div>
                <div class="table">
                    <table class="table table-stripped">
                        <thead class="table-header">
                            <tr>
                                <th scope="col">Service</th>
                                <th scope="col">Regular</th>
                                <th scope="col">One Day</th>
                                <th scope="col">Express</th>
                                <th scope="col">Quick</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daily_kiloan as $daily_kiloans)
                            <tr>
                                <th scope="row">{{ $daily_kiloans->Layanan }}</th>
                                <td>Rp {{ $daily_kiloans->Regular }}</td>
                                <td>Rp {{ $daily_kiloans->One_Day }}</td>
                                <td>Rp {{ $daily_kiloans->Express }}</td>
                                <td>Rp {{ $daily_kiloans->Quick }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="label-header">
                    <h3>Layanan Satuan</h3>
                </div>
                <div class="table">
                    <table class="table table-stripped">
                        <thead class="table-header">
                            <tr>
                                <th scope="col">Service</th>
                                <th scope="col">Regular</th>
                                <th scope="col">One Day</th>
                                <th scope="col">Express</th>
                                <th scope="col">Quick</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan_satuan as $layanan_satuans)
                            <tr>
                                <th scope="row">{{ $layanan_satuans->Tipe }}</th>
                                <td>Rp {{ $layanan_satuans->Regular }}</td>
                                <td>Rp {{ $layanan_satuans->One_Day }}</td>
                                <td>Rp {{ $layanan_satuans->Express }}</td>
                                <td>Rp {{ $layanan_satuans->Quick }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-3">
                    <small class="text-muted">* Prices are per kilogram</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection