@extends('layouts.app')

@section('title', 'Our Services')

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


<!-- memanggil layanan_satuan -->
<p>Layanan satuan</p>
@foreach ($layanan_satuan as $layanan_satuans)
<p class="judul">{{ $layanan_satuans->id }}. {{ $layanan_satuans->Tipe }}</p>
@endforeach

<br>

<!-- memanggil daily_kiloan -->
<p>Daily kiloan</p>
@foreach ($daily_kiloan as $daily_kiloans)
<p class="judul">{{ $daily_kiloans->id }}. {{ $daily_kiloans->Layanan }}</p>
@endforeach

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
                            <tr>
                                <th scope="row">Cuci Kering</th>
                                <td>Rp 5.000</td>
                                <td>Rp 7.500</td>
                                <td>Rp 10.000</td>
                                <td>Rp 12.500</td>
                            </tr>
                            <tr>
                                <th scope="row">Cuci Kering & Gosok</th>
                                <td>Rp 6.000</td>
                                <td>Rp 9.000</td>
                                <td>Rp 12.000</td>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Setrika</th>
                                <td>Rp 5.000</td>
                                <td>Rp 7.500</td>
                                <td>Rp 10.000</td>
                                <td>Rp 12.500</td>
                            </tr>
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
                            <tr>
                                <th scope="row">Bed Cover</th>
                                <td>Rp 25.000</td>
                                <td>Rp 37.500</td>
                                <td>Rp 50.000</td>
                                <td>Rp 62.500</td>
                            </tr>
                            <tr>
                                <th scope="row">Sprei</th>
                                <td>Rp 8.000</td>
                                <td>Rp 12.000</td>
                                <td>Rp 16.000</td>
                                <td>Rp 20.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Mukenah</th>
                                <td>Rp 8.000</td>
                                <td>Rp 12.000</td>
                                <td>Rp 16.000</td>
                                <td>Rp 20.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Sajadah</th>
                                <td>Rp 6.000</td>
                                <td>Rp 9.000</td>
                                <td>Rp 12.000</td>
                                <td>Rp 15.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Handuk</th>
                                <td>Rp 5.000</td>
                                <td>Rp 7.500</td>
                                <td>Rp 10.000</td>
                                <td>Rp 12.500</td>
                            </tr>
                            <tr>
                                <th scope="row">Selimut</th>
                                <td>Rp 10.000</td>
                                <td>Rp 15.000</td>
                                <td>Rp 20.000</td>
                                <td>Rp 25.000</td>
                            </tr>
                            <tr>
                                <th scope="row">Jaket</th>
                                <td>Rp 7.000</td>
                                <td>Rp 10.500</td>
                                <td>Rp 14.000</td>
                                <td>Rp 17.500</td>
                            </tr>
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