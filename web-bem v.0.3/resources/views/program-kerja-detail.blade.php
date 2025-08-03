<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM KERJA - BEM STB 2024</title>
    
    <meta name="title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA">
    <meta name="description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta, {{ $DetailProker->departemen }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('asets/images/logo-1x1.png') }}" />
    <meta property="og:url" content="{{ asset('') }}program-kerja/{{ $DetailProker->departemen }}" />
    <meta property="og:description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image:secure_url" content="{{ $DetailProker->gambar_departemen }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="shortcut icon" href="{{ asset('asets/images/logo-1x1.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('asets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/library/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/custom/css/style.css') }}">
    <style>
        .jumbotron-program-kerja-detail{
            background-image: url({{ $DetailProker->gambar_departemen }});
        }
        .program-kerja-detail-2 h1::after{
            content: ' PROGRAM KERJA ';
        }
    </style>
</head>
<body data-scroll-index="0" class="onloading">

    @include('components.preloader')
    @include('components.navbar')
    
    <section class="jumbotron jumbotron-program-kerja-detail">
        <h1>{{ $DetailProker->departemen }}</h1>
    </section>

    <section class="program-kerja-detail">
        <div class="program-kerja-detail-1"></div>
        <div class="program-kerja-detail-2">
            <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
            <div class="breadcrumbs pt-5 pb-5">
                <a href="/">home</a> / 
                <a href="/program-kerja">program-kerja</a> /
                <a href="/program-kerja/{{ $DetailProker->departemen }}">{{ $DetailProker->nama_departemen }}</a>
            </div>
            <div class="row">
                <h1>{{ $DetailProker->nama_departemen }} </h1>
            </div>
        </div>
        <div class="program-kerja-detail-3">
            <div class="container">
                <div class="row">
                    <pre>
{{ $DetailProker->proker_departemen }}
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