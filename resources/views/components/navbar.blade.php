<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="{{ route('dashboard', ['username' => $username ?? '']) }}">
            <img src="{{ asset('assets/images/LogoKos.png') }}" alt="Logo" width="80" height="50" class="d-inline-block align-text-top me-2 text-white">
            KosTeman
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(!empty($username))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('profile', ['username' => $username]) }}">Profil</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
