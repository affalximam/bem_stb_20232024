<nav class="navbar navbar-home navbar-expand-xl fixed-top navbar-home" id="navbar" data-scroll-index="0">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('asets/images/logo-naradhipta.webp') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li> 
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/struktur-organisasi">Struktur Organisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/program-kerja">Program Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dokumentasi">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>