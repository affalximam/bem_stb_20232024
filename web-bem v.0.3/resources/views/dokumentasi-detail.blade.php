<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOKUMENTASI {{ $DetailDokumentasi->nama_dokumentasi }} - BEM STB 2024</title>

    <meta name="title" content="{{ $DetailDokumentasi->nama_dokumentasi }} - BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA">
    <meta name="description" content="{{ $DetailDokumentasi->nama_dokumentasi }} - WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta, {{ $DetailDokumentasi->nama_dokumentasi }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="{{ $DetailDokumentasi->nama_dokumentasi }} - BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('asets/images/logo-1x1.png') }}" />
    <meta property="og:url" content="{{ asset('') }}dokumentasi/{{ $DetailDokumentasi->nama_dokumentasi }}" />
    <meta property="og:description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image:secure_url" content="{{ asset('asets/images/logo-1x1.ico') }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="shortcut icon" href="{{ asset('asets/images/logo-1x1.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('asets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/library/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/custom/css/style.css') }}">
    <style>
        .jumbotron-dokumentasi-detail{
            background-image: url('{{ $DetailDokumentasi->gambar_dokumentasi }}');
        }
    </style>
</head>
<body data-scroll-index="0" class="onloading">
    @include('components.preloader')
    @include('components.navbar')
    
    <section class="jumbotron jumbotron-dokumentasi-detail">
        <h1>DOKUMENTASI</h1>
    </section>

    <section class="dokumentasi-detail">
        <div class="dokumentasi-detail-1"></div>
        <div class="dokumentasi-detail-2">
            <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
            <div class="breadcrumbs pt-5 pb-5">
                <a href="/">home</a> / 
                <a href="/dokumentasi">dokumentasi</a> /
                <a href="/dokementasi/{{ $DetailDokumentasi->nama_dokumentasi }}">{{ $DetailDokumentasi->nama_dokumentasi }}</a>
            </div>
            <div class="row">
                <h1>{{ $DetailDokumentasi->nama_dokumentasi }}</h1>
                <h2>{{ $DetailDokumentasi['formatted_date'] }}</h2>
            </div>
        </div>
        <div class="dokumentasi-detail-3">
            <div class="container">
                <div class="row">
                    <a href="{{ $DetailDokumentasi->gambar_dokumentasi }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ $DetailDokumentasi->gambar_dokumentasi }}" alt="">
                    </a>
                </div>
                <div class="row">
                    <pre>
{{ $DetailDokumentasi->deskripsi_dokumentasi }}
                    </pre>
                </div>
            </div>
        </div>
        <img src="{{ asset('asets/svg/Vector-3.svg') }}" class="vector-3 pt-5">
    </section>

    


    @include('components.contact')
    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>