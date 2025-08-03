<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRUKTUR ORGANISASI - BEM STB 2024</title>
    
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
    <meta property="og:url" content="{{ asset('') }}struktur-organisasi" />
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
    
    <section class="jumbotron jumbotron-struktur-organisasi">
        <h1>STRUKTUR ORGANISASI</h1>
    </section>

    <section class="struktur-organisasi">
        <div class="struktur-organisasi-1"></div>
        <div class="struktur-organisasi-2">
            <img src="{{ asset('asets/svg/Vector-2.svg') }}" class="vector-2">
            <div class="breadcrumbs pt-5 pb-5">
                <a href="/">home</a> / 
                <a href="/struktur-organisasi">struktur-organisasi</a>
            </div>
            <div class="row">
                <h1>STRUKTUR ORGANISASI</h1>
            </div>
            <div class="container">
                <div class="row">
                    <img src="{{ asset('asets/images/struktur.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="struktur-organisasi-3"></div>
        <div class="struktur-organisasi-4">
            <div class="struktur-organisasi-4-1">
                <div class="row struktur-organisasi-4-1-1">
                    <h2 class="text-center">STRUKTUR ORGANISASI BEM STB 2024</h2>
                </div>
                <div class="container struktur-organisasi-4-1-2">
                    <div class="row">
                        <div class="card">
                            <div class="row">
                                <div class="col-6 card-left">
                                    <img src="{{ $Presma->gambar_anggota }}" alt="" srcset="">
                                </div>
                                <div class="col-6 card-right">
                                    <p class="card-text-1"> {{ $Presma->jabatan_anggota }} </p>
                                    <a class="card-text-2" href="/struktur-organisasi/{{ $Presma->nama_anggota }}">{{ $Presma->nama_anggota }} </a>
                                    <p class="card-text-3">{{ $Presma->jurusan_anggota }}  {{ $Presma->angkatan_anggota }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-6 card-left">
                                    <p class="card-text-1"> {{ $WaPresma->jabatan_anggota }} </p>
                                    <a class="card-text-2" href="/struktur-organisasi/{{ $WaPresma->nama_anggota }}">{{ $WaPresma->nama_anggota }} </a>
                                    <p class="card-text-3">{{ $WaPresma->jurusan_anggota }}  {{ $WaPresma->angkatan_anggota }} </p>
                                </div>
                                <div class="col-6 card-right">
                                    <img src="{{ $WaPresma->gambar_anggota }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($Sekretaris as $sekretaris)
                            <div class="card">
                                <div class="row">
                                    @if ($i == 1)
                                        <div class="col-6 card-left">
                                            <img src="{{ $sekretaris['gambar_anggota'] }}" alt="" srcset="">
                                        </div>
                                        <div class="col-6 card-right">
                                            <p class="card-text-1">{{ $sekretaris['jabatan_anggota'] }}</p>
                                            <a class="card-text-2" href="/struktur-organisasi/{{ $sekretaris['nama_anggota'] }}">{{ $sekretaris['nama_anggota'] }}</a>
                                            <p class="card-text-3">{{ $sekretaris['jurusan_anggota'] }} {{ $sekretaris['angkatan_anggota'] }}</p>
                                        </div>
                                    @else ($i == 2)
                                        <div class="col-6 card-left">
                                            <p class="card-text-1">{{ $sekretaris['jabatan_anggota'] }}</p>
                                            <a class="card-text-2" href="/struktur-organisasi/{{ $sekretaris['nama_anggota'] }}">{{ $sekretaris['nama_anggota'] }}</a>
                                            <p class="card-text-3">{{ $sekretaris['jurusan_anggota'] }} {{ $sekretaris['angkatan_anggota'] }}</p>
                                        </div>
                                        <div class="col-6 card-right">
                                            <img src="{{ $sekretaris['gambar_anggota'] }}" alt="" srcset="">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @php
                                $i = $i + 1;
                            @endphp
                        @endforeach
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($Bendahara as $bendahara)
                            <div class="card">
                                <div class="row">
                                    @if ($i == 1)
                                        <div class="col-6 card-left">
                                            <img src="{{ $bendahara['gambar_anggota'] }}" alt="" srcset="">
                                        </div>
                                        <div class="col-6 card-right">
                                            <p class="card-text-1">{{ $bendahara['jabatan_anggota'] }}</p>
                                            <a class="card-text-2" href="/struktur-organisasi/{{ $bendahara['nama_anggota'] }}">{{ $bendahara['nama_anggota'] }}</a>
                                            <p class="card-text-3">{{ $bendahara['jurusan_anggota'] }} {{ $bendahara['angkatan_anggota'] }}</p>
                                        </div>
                                    @else ($i == 2)
                                        <div class="col-6 card-left">
                                            <p class="card-text-1">{{ $bendahara['jabatan_anggota'] }}</p>
                                            <a class="card-text-2" href="/struktur-organisasi/{{ $bendahara['nama_anggota'] }}">{{ $bendahara['nama_anggota'] }}</a>
                                            <p class="card-text-3">{{ $bendahara['jurusan_anggota'] }} {{ $bendahara['angkatan_anggota'] }}</p>
                                        </div>
                                        <div class="col-6 card-right">
                                            <img src="{{ $bendahara['gambar_anggota'] }}" alt="" srcset="">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @php
                                $i = $i + 1;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="struktur-organisasi-4-2">
                <div class="row struktur-organisasi-4-2-1">
                    <h3>PENGEMBANGAN SUMBER DAYA MANUSIA</h3>
                </div>
                <div class="struktur-organisasi-4-2-2">
                    <div class="container">
                        <div class="row struktur-organisasi-4-2-2-1">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 card-left">
                                        <img src="{{ $MenteriPsdm->gambar_anggota }}" alt="" srcset="">
                                    </div>
                                    <div class="col-6 card-right">
                                        <p class="card-text-1"> {{ $MenteriPsdm->jabatan_anggota }} </p>
                                        <a class="card-text-2" href="/struktur-organisasi/{{ $MenteriPsdm->nama_anggota }}">{{ $MenteriPsdm->nama_anggota }} </a>
                                        <p class="card-text-3">{{ $MenteriPsdm->jurusan_anggota }}  {{ $MenteriPsdm->angkatan_anggota }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row struktur-organisasi-4-2-2-2">
                            @foreach ($AnggotaPsdm as $anggotaPsdm)
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6 card-left">
                                                <img src="{{ $anggotaPsdm['gambar_anggota'] }}" alt="" srcset="">
                                            </div>
                                            <div class="col-6 card-right">
                                                <p class="card-text-1">{{ $anggotaPsdm['jabatan_anggota'] }}</p>
                                                <a class="card-text-2" href="/struktur-organisasi/{{ $anggotaPsdm['nama_anggota'] }}">{{ $anggotaPsdm['nama_anggota'] }}</a>
                                                <p class="card-text-3">{{ $anggotaPsdm['jurusan_anggota'] }} {{ $anggotaPsdm['angkatan_anggota'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="struktur-organisasi-4-3">
                <div class="row struktur-organisasi-4-3-1">
                    <h3>LEMBAGA SOSIAL MASYARAKAT</h3>
                </div>
                <div class="struktur-organisasi-4-3-2">
                    <div class="container">
                        <div class="row struktur-organisasi-4-3-2-1">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 card-left">
                                        <img src="{{ $MenteriLsm->gambar_anggota }}" alt="" srcset="">
                                    </div>
                                    <div class="col-6 card-right">
                                        <p class="card-text-1"> {{ $MenteriLsm->jabatan_anggota }} </p>
                                        <a class="card-text-2" href="/struktur-organisasi/{{ $MenteriLsm->nama_anggota }}">{{ $MenteriLsm->nama_anggota }} </a>
                                        <p class="card-text-3">{{ $MenteriLsm->jurusan_anggota }}  {{ $MenteriLsm->angkatan_anggota }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row struktur-organisasi-4-3-2-2">
                            @foreach ($AnggotaLsm as $anggotaLsm)
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6 card-left">
                                                <img src="{{ $anggotaLsm['gambar_anggota'] }}" alt="" srcset="">
                                            </div>
                                            <div class="col-6 card-right">
                                                <p class="card-text-1">{{ $anggotaLsm['jabatan_anggota'] }}</p>
                                                <a class="card-text-2" href="/struktur-organisasi/{{ $anggotaLsm['nama_anggota'] }}">{{ $anggotaLsm['nama_anggota'] }}</a>
                                                <p class="card-text-3">{{ $anggotaLsm['jurusan_anggota'] }} {{ $anggotaLsm['angkatan_anggota'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="struktur-organisasi-4-4">
                <div class="row struktur-organisasi-4-4-1">
                    <h3>KEMENTRIAN KOMUNIKASI DAN INFORMASI</h3>
                </div>
                <div class="struktur-organisasi-4-4-2">
                    <div class="container">
                        <div class="row struktur-organisasi-4-4-2-1">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 card-left">
                                        <img src="{{ $MenteriKominfo->gambar_anggota }}" alt="" srcset="">
                                    </div>
                                    <div class="col-6 card-right">
                                        <p class="card-text-1"> {{ $MenteriKominfo->jabatan_anggota }} </p>
                                        <a class="card-text-2" href="/struktur-organisasi/{{ $MenteriKominfo->nama_anggota }}">{{ $MenteriKominfo->nama_anggota }} </a>
                                        <p class="card-text-3">{{ $MenteriKominfo->jurusan_anggota }}  {{ $MenteriKominfo->angkatan_anggota }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row struktur-organisasi-4-4-2-2">
                            @foreach ($AnggotaKominfo as $anggotaKominfo)
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6 card-left">
                                                <img src="{{ $anggotaKominfo['gambar_anggota'] }}" alt="" srcset="">
                                            </div>
                                            <div class="col-6 card-right">
                                                <p class="card-text-1">{{ $anggotaKominfo['jabatan_anggota'] }}</p>
                                                <a class="card-text-2" href="/struktur-organisasi/{{ $anggotaKominfo['nama_anggota'] }}">{{ $anggotaKominfo['nama_anggota'] }}</a>
                                                <p class="card-text-3">{{ $anggotaKominfo['jurusan_anggota'] }} {{ $anggotaKominfo['angkatan_anggota'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="struktur-organisasi-4-5">
                <div class="row struktur-organisasi-4-5-1">
                    <h3>SENI BUDAYA DAN OLAHRAGA</h3>
                </div>
                <div class="struktur-organisasi-4-4-2">
                    <div class="container">
                        <div class="row struktur-organisasi-4-5-2-1">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 card-left">
                                        <img src="{{ $MenteriSenbora->gambar_anggota }}" alt="" srcset="">
                                    </div>
                                    <div class="col-6 card-right">
                                        <p class="card-text-1"> {{ $MenteriSenbora->jabatan_anggota }} </p>
                                        <a class="card-text-2" href="/struktur-organisasi/{{ $MenteriSenbora->nama_anggota }}">{{ $MenteriSenbora->nama_anggota }} </a>
                                        <p class="card-text-3">{{ $MenteriSenbora->jurusan_anggota }}  {{ $MenteriSenbora->angkatan_anggota }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row struktur-organisasi-4-5-2-2">
                            @foreach ($AnggotaSenbora as $anggotaSenbora)
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6 card-left">
                                                <img src="{{ $anggotaSenbora['gambar_anggota'] }}" alt="" srcset="">
                                            </div>
                                            <div class="col-6 card-right">
                                                <p class="card-text-1">{{ $anggotaSenbora['jabatan_anggota'] }}</p>
                                                <a class="card-text-2" href="/struktur-organisasi/{{ $anggotaSenbora['nama_anggota'] }}">{{ $anggotaSenbora['nama_anggota'] }}</a>
                                                <p class="card-text-3">{{ $anggotaSenbora['jurusan_anggota'] }} {{ $anggotaSenbora['angkatan_anggota'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="struktur-organisasi-4-6">
                <div class="row struktur-organisasi-4-6-1">
                    <h3>KEMENTRIAN LUAR NEGERI</h3>
                </div>
                <div class="struktur-organisasi-4-6-2">
                    <div class="container">
                        <div class="row struktur-organisasi-4-6-2-1">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6 card-left">
                                        <img src="{{ $MenteriKemenlu->gambar_anggota }}" alt="" srcset="">
                                    </div>
                                    <div class="col-6 card-right">
                                        <p class="card-text-1"> {{ $MenteriKemenlu->jabatan_anggota }} </p>
                                        <a class="card-text-2" href="/struktur-organisasi/{{ $MenteriKemenlu->nama_anggota }}">{{ $MenteriKemenlu->nama_anggota }} </a>
                                        <p class="card-text-3">{{ $MenteriKemenlu->jurusan_anggota }}  {{ $MenteriKemenlu->angkatan_anggota }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row struktur-organisasi-4-6-2-2">
                            @foreach ($AnggotaKemenlu as $anggotaKemenlu)
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-6 card-left">
                                                <img src="{{ $anggotaKemenlu['gambar_anggota'] }}" alt="" srcset="">
                                            </div>
                                            <div class="col-6 card-right">
                                                <p class="card-text-1">{{ $anggotaKemenlu['jabatan_anggota'] }}</p>
                                                <a class="card-text-2" href="/struktur-organisasi/{{ $anggotaKemenlu['nama_anggota'] }}">{{ $anggotaKemenlu['nama_anggota'] }}</a>
                                                <p class="card-text-3">{{ $anggotaKemenlu['jurusan_anggota'] }} {{ $anggotaKemenlu['angkatan_anggota'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <img src="{{ asset('asets/svg/Vector-3.svg') }}" class="vector-3 pt-5 mt-5">
                </div>
            </div>
        </div>
    </section>

    @include('components.contact')
    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>