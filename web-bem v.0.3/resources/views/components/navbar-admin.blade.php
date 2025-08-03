<nav class="navbar navbar-admin navbar-expand-xl fixed-top" id="navbar" data-scroll-index="0">
    <a href="/admin" class="navbar-brand text-white">
        <img src="{{ asset('asets/images/logo-naradhipta.webp') }}" alt="Logo">
        DASHBOARD ADMIN
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
    </button>
<div class="collapse navbar-collapse justify-content-end text-center" id="navbarNav">
    <ul class="navbar-nav py-3 py-xl-0">
        <div class="dropdown px-2 py-1">
            <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi Bem
            </button>
            <ul class="dropdown-menu bg-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="/admin/sambutan-presiden-mahasiswa">Sambutan Presiden Mahasiswa</a></li>
                <li><a class="dropdown-item" href="/admin/visi-misi">Visi Misi</a></li>
                <li><a class="dropdown-item" href="/admin/proker-bem">Proker Bem</a></li>
                <li><a class="dropdown-item" href="/admin/departemen">Departemen</a></li>
                <li><a class="dropdown-item" href="/admin/anggota">Keanggotaan</a></li>
                <li><a class="dropdown-item" href="/admin/anggota/add">Tambah Keanggotaan</a></li>
            </ul>
        </div>
        <div class="dropdown px-2 py-1">
            <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kegiatan
            </button>
            <ul class="dropdown-menu bg-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="/admin/dokumentasi/add">Tambah Dokumentasi</a></li>
                <li><a class="dropdown-item" href="/admin/dokumentasi">Dokumentasi</a></li>
            </ul>
        </div>
        <div class="dropdown px-2 py-1">
            <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Halaman
            </button>
            <ul class="dropdown-menu bg-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="/">Home</a></li>
                <li><a class="dropdown-item" href="/tentang">Tentang Kami</a></li>
                <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="/program-kerja">Program Kerja</a></li>
                <li><a class="dropdown-item" href="/dokumentasi">Dokumentasi</a></li>
                <li><a class="dropdown-item" href="/kontak">Kontak</a></li>
            </ul>
        </div>
        <div class="dropdown px-2 py-1">
            <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
            </button>
            <ul class="dropdown-menu bg-dark dropdown-menu-end">
                <li><a class="dropdown-item" href="/admin/settings">Pengaturan</a></li>
                <li><a class="dropdown-item" href="/admin/contact">Respon Kontak</a></li>
                <li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>                
            </ul>
        </div>
    </ul>
</div>
</nav>