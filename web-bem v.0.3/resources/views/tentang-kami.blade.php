<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTANG KAMI - BEM STB 2024</title>
    
    <meta name="title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA">
    <meta name="description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('asets/images/logo-1x1.png') }}" />
    <meta property="og:url" content="{{ asset('') }}tentang" />
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
</head>
<body data-scroll-index="0" class="onloading">

    @include('components.preloader')
    @include('components.navbar')
    
    <section class="jumbotron jumbotron-tentang">
        <h1>TENTANG KAMI</h1>
    </section>

    <section class="tentang">
        <div class="tentang-1"></div>
        <div class="tentang-2">
            <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
            <div class="breadcrumbs pt-5 pb-4">
                <a href="/">home</a> / 
                <a href="/tentang">tentang</a>
            </div>
        </div>
        <div class="tentang-3">
            <div class="row">
                <h1>TENTANG KAMI</h1>
            </div>
            <div class="container">
                <div class="row">
                    <pre>
<h2>{{ $visi->nama_informasi }}</h2>
{{ $visi->isi_informasi }}

<h2>{{ $misi->nama_informasi }}</h2>
{{ $misi->isi_informasi }}
                    </pre>
                </div>
            </div>
            <img src="{{ asset('asets/svg/Vector-3.svg') }}" class="vector-3 pt-5">
        </div>
    </section>


    @include('components.contact')
    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>