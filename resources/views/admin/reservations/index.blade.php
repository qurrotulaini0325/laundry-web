@extends('layouts.admin')

@section('title', 'Kelola Reservasi')

@section('header', 'Kelola Reservasi')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. Telepon</th>
                                <th>Tipe Paket</th>
                                <th>Jenis Layanan</th>
                                <th>Kecepatan</th>
                                <th>Tanggal Ambil</th>
                                <th>Harga</th>
                                <th>Catatan</th>
                                <th>Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reservations as $index => $reservation)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ ucfirst($reservation->service_type) }}</td>
                                <td>{{ $reservation->service_item }}</td>
                                <td>{{ $reservation->service_speed }}</td>
                                <td>{{ $reservation->pickup_date->format('d/m/Y') }}</td>
                                <td>Rp {{ number_format($reservation->price, 0, ',', '.') }}</td>
                                <td>{{ $reservation->notes ?? '-' }}</td>
                                <td>{{ $reservation->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">Tidak ada data reservasi</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection