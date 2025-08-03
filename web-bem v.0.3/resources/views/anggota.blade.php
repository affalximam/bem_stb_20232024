<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $DetailAnggota->nama_anggota }} - BEM STB 2024</title>

    <meta name="title" content="{{ $DetailAnggota->nama_anggota }} - BEM STB 2024">
    <meta name="description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta, {{ $DetailAnggota->nama_anggota }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="{{ $DetailAnggota->nama_anggota }} - BEM STB 2024" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $DetailAnggota->nama_anggota }}" />
    <meta property="og:url" content="/" />
    <meta property="og:description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="{{ $DetailAnggota->nama_anggota }} - BEM STB 2024" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image:secure_url" content="{{ $DetailAnggota->nama_anggota }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="shortcut icon" href="{{ asset('asets/images/logo-1x1.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('asets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/library/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/custom/css/style.css') }}">
    <style>
        .jumbotron-profil-anggota{
            background-image: url('{{ $DetailAnggota->gambar_anggota }}');
        }
    </style>
</head>
<body data-scroll-index="0" class="onloading">

    @include('components.preloader')
    @include('components.navbar')
    
    <section class="jumbotron jumbotron-profil-anggota">
        <h1>{{ $DetailAnggota->nama_anggota }}</h1>
    </section>

    <section class="profil-anggota">
        <div class="profil-anggota-1"></div>
        <div class="profil-anggota-2">
            <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
            <div class="breadcrumbs pt-5 pb-5">
                <a href="/">home</a> / 
                <a href="/struktur-organisasi">struktur-organisasi</a> /
                <a href="/struktur-organisasi/{{ $DetailAnggota->nama_anggota }}">{{ $DetailAnggota->nama_anggota }}</a>
            </div>
            <div class="row">
                <h1>PROFIL ANGGOTA</h1>
            </div>
        </div>
        <div class="profil-anggota-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ $DetailAnggota->gambar_anggota }}" alt="">
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-3">
                                <p>Nama</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-8"><span>{{ $DetailAnggota->nama_anggota }}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Jabatan</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-8"><span>{{ $DetailAnggota->jabatan_anggota }}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Prodi</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-8"><span>{{ $DetailAnggota->jurusan_anggota }}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Angkatan</p>
                            </div>
                            <div class="col-1">:</div>
                            <div class="col-8"><span>{{ $DetailAnggota->angkatan_anggota }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('asets/svg/Vector-3.svg') }}" class="vector-3 pt-5 mt-5">
    </section>

    


    @include('components.contact')
    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')
    
</body>
</html>