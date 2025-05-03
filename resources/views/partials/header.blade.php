<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark header_area" arial-label="Laundry navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Assyifa Laundry<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsLaundry" aria-controls="navbarsLaundry" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsLaundry">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Layanan</a>
                </li>
                <li class="nav-item {{ request()->routeIs('reservation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('reservation') }}">Reservasi</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>

</nav>