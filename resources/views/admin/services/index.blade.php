@extends('layouts.admin')

@section('title', 'Kelola Layanan')

@section('header', 'Kelola Layanan')

@section('action_buttons')
<div class="dropdown">
    <button class="btn btn-success dropdown-toggle" type="button" id="addServiceDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-plus"></i> Tambah Layanan
    </button>
    <ul class="dropdown-menu" aria-labelledby="addServiceDropdown">
        <li><a class="dropdown-item" href="{{ route('admin.services.create', ['type' => 'daily']) }}">Daily Kiloan</a></li>
        <li><a class="dropdown-item" href="{{ route('admin.services.create', ['type' => 'satuan']) }}">Layanan Satuan</a></li>
    </ul>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Daily Kiloan</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Layanan</th>
                                <th>Regular</th>
                                <th>One Day</th>
                                <th>Express</th>
                                <th>Quick</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($daily_kiloan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->Layanan }}</td>
                                <td>Rp {{ number_format($item->Regular, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->One_Day, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->Express, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->Quick, 0, ',', '.') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.services.edit', ['id' => $item->id, 'type' => 'daily']) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.services', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="type" value="daily">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data layanan Daily Kiloan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Layanan Satuan</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe</th>
                                <th>Regular</th>
                                <th>One Day</th>
                                <th>Express</th>
                                <th>Quick</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($layanan_satuan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->Tipe }}</td>
                                <td>Rp {{ number_format($item->Regular, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->One_Day, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->Express, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($item->Quick, 0, ',', '.') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.services.edit', ['id' => $item->id, 'type' => 'satuan']) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.services', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="type" value="satuan">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data Layanan Satuan</td>
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