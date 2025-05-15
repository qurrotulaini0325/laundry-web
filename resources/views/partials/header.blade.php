<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark header_area" style="padding-top: 8px; padding-bottom: 8px;" aria-label="Laundry navigation bar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Asyifa Laundry" height="40">
        </a>

        <!-- Toggle Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsLaundry" aria-controls="navbarsLaundry" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsLaundry">
            <ul class="custom-navbar-nav navbar-nav mb-2 mb-md-0">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Layanan</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </li>
            </ul>
        </div>

        <div class="d-none d-md-block ms-3">
            <a href="{{ route('reservation') }}" class="btn fw-semibold btn-warning-custom px-4" style="background-color: #ffc107; color: #212529; border: none;">Reservasi</a>
        </div>
    </div>
</nav>
