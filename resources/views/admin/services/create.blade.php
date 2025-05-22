@extends('layouts.admin')

@section('title', 'Add New Service')
@section('page_title', 'Add New Service')

@section('additional_js')
    <script src="{{ asset('js/service-form-validation.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="{{ $type }}">
                    <div class="mb-3">
                        <label for="serviceName" class="form-label">{{ $type === 'daily' ? 'Nama Layanan' : 'Tipe Layanan' }}</label>
                        <input type="text" class="form-control" id="serviceName" name="{{ $type === 'daily' ? 'Layanan' : 'Tipe' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="regular" class="form-label">Harga Regular (Rp)</label>
                        <input type="number" class="form-control" id="regular" name="Regular" required>
                    </div>

                    <div class="mb-3">
                        <label for="oneDay" class="form-label">Harga One Day (Rp)</label>
                        <input type="number" class="form-control" id="oneDay" name="One_Day" required>
                    </div>

                    <div class="mb-3">
                        <label for="express" class="form-label">Harga Express (Rp)</label>
                        <input type="number" class="form-control" id="express" name="Express" required>
                    </div>

                    <div class="mb-3">
                        <label for="quick" class="form-label">Harga Quick (Rp)</label>
                        <input type="number" class="form-control" id="quick" name="Quick" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/admin/services" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Save Service
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection