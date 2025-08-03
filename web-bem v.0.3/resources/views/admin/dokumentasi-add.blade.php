<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - BEM STB 2024</title>
    
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
    <meta property="og:url" content="{{ asset('') }}kontak" />
    <meta property="og:description" content="ADMIN - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="ADMIN BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
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
    @include('components.navbar-admin')

    <section class="dashboard-admin pb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pt-2 pb-5">TAMBAH DOKUMENTASI</h1>
            </div>
            <form action="{{ route('admin.add.dokumentasi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="pt-2">Nama Dokumentasi</h2>
                        <input type="text" class="form-control" name="nama_dokumentasi" id="floatingInput" required>
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Gambar Dokumentasi</h2>
                        <input class="form-control" type="file" id="formFile" name="gambar_dokumentasi"  required>
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Deskripsi</h2>
                        <textarea name="deskripsi_dokumentasi" class="textarea form-control"  required></textarea>
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Waktu</h2>
                        <div class="row">
                            <select id="dokumentasiAddJam" class="form-select my-2 mx-1 w-auto" name="jam" aria-label="Default select example">
                                @for($i = 0; $i < 24; $i++)  
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select id="dokumentasiAddMenit" class="form-select my-2 mx-1 w-auto" name="menit" aria-label="Default select example">
                                @for($i = 0; $i < 60; $i++)  
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select id="dokumentasiAddTanggal" class="form-select my-2 mx-1 w-auto" name="tanggal" aria-label="Default select example">
                                @for($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">Tanggal {{ $i }}</option>
                                @endfor
                            </select>
                            <select id="dokumentasiAddBulan" class="form-select my-2 mx-1 w-auto" name="bulan" aria-label="Default select example" onchange="updateTanggalAdminDokumentasiAdd()">
                                @foreach($bulanArray as $i => $value)
                                    <option value="{{ $i }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <select id="dokumentasiAddTahun" class="form-select my-2 mx-1 w-auto" name="tahun" aria-label="Default select example" onchange="updateTanggalAdminDokumentasiAdd()">
                                @for($i = 1970; $i <= 2050; $i++)
                                <option value="{{ $i }}">Tahun {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="btn btn-sm w-100 pt-2 text-white btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                <path d="M11 2H9v3h2z"/>
                                <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                            </svg>
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section> 

    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>