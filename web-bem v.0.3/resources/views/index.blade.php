<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM STB 2024</title>

    <meta name="title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA">
    <meta name="description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('asets/images/logo-1x1.ico') }}" />
    <meta property="og:url" content="{{asset('')}}" />
    <meta property="og:description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image:secure_url" content="{{ asset('asets/images/logo-1x1.png') }}" />
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

    <section class="jumbotron jumbotron-home" data-scroll-index="1">
        <h1>Selamat Datang Di website Kami</h1>
        <h2>BEM STB 2024</h2>
        <h3>Kabinet Naradhipta</h3>
        <img src="{{ asset('asets/svg/Vector-1.svg') }}" class="vector-1">
    </section>

    <section class="sambutan-presma" data-scroll-index="2">
        <div class="row sambutan-presma-1">
            <h2>Jelajah Informasi Terbaru</h2>
        </div>
        <div class="sambutan-presma-2">
            <div class="sambutan-presma-2-1"></div>
            <div class="container">
                <div class="row">
                <div class="col-4">
                    {{-- <img src="{{ asset('asets/images/presma.webp') }}" alt="">                 --}}
                    <img src="{{ $fotoPresma->isi_informasi }}" alt="">
                </div>
                <div class="col-8">
                    <h3>{{ $sambutanPresidenMahasiswa->nama_informasi }}</h3>
                    <p>{{ $sambutanPresidenMahasiswa->isi_informasi }}</p>
                    <a href="/tentang" class="btn btn-lg">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="sambutan-presma-3"></div>
    </section>

    <section class="dokumentasi-terbaru" data-scroll-index="3">
        <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
        <div class="dokumentasi-terbaru-1">
            <div class="row">
                    <h2>Dokumentasi Terbaru</h2>
                </div>
            <div class="container">
                <div class="row">
                    @foreach ($dokumentasiTerbaru as $dokumentasi)
                    <div class="col-md-6">
                        <a class="card" href="/dokumentasi/{{ $dokumentasi['nama_dokumentasi'] }}">
                            <img src="{{ $dokumentasi['gambar_dokumentasi'] }}" alt="" srcset="">
                            <h3>{{ $dokumentasi['nama_dokumentasi'] }}</h3>
                        </a>
                    </div>
                    @endforeach
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