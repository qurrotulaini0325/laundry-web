@extends('layouts.admin')

@section('title', 'Edit Service')
@section('page_title', 'Edit Service')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="type" value="{{ $type }}">

                    <div class="mb-3">
                        <label for="serviceName" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="serviceName" 
                            name="{{ $type === 'daily' ? 'Layanan' : 'Tipe' }}" 
                            value="{{ $type === 'daily' ? $service->Layanan : $service->Tipe }}" 
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="regular" class="form-label">Harga Regular (Rp)</label>
                        <input type="number" class="form-control" id="regular" name="Regular" value="{{ $service->Regular }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="oneDay" class="form-label">Harga One Day (Rp)</label>
                        <input type="number" class="form-control" id="oneDay" name="One_Day" value="{{ $service->One_Day }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="express" class="form-label">Harga Express (Rp)</label>
                        <input type="number" class="form-control" id="express" name="Express" value="{{ $service->Express }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="quick" class="form-label">Harga Quick (Rp)</label>
                        <input type="number" class="form-control" id="quick" name="Quick" value="{{ $service->Quick }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/admin/services" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Service
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection