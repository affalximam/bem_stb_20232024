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
                <h1 class="text-center pt-2 pb-5">EDIT DOKUMENTASI [ {{ $Dokumentasi->nama_dokumentasi }} ]</h1>
            </div>
            <form action="{{ route('admin.edit.dokumentasi', $Dokumentasi->id_dokumentasi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="pt-2">Nama Dokumentasi</h2>
                        <input type="text" class="form-control" name="nama_dokumentasi" id="floatingInput" placeholder="nama dokumentasi" value="{{ $Dokumentasi->nama_dokumentasi }}">
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Gambar Dokumentasi</h2>
                        <input class="form-control" type="file" id="formFile" name="gambar_dokumentasi"">
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Deskripsi</h2>
                        <textarea name="deskripsi_dokumentasi" class="textarea form-control">{{ $Dokumentasi->deskripsi_dokumentasi }}</textarea>
                    </div>
                    <div class="col-xl-6">
                        <h2 class="pt-2">Waktu</h2>
                        <div class="row">
                            <select id="dokumentasiEditJam" class="form-select my-2 mx-1 w-auto" name="jam" aria-label="Default select example">
                                @for($i = 0; $i < 24; $i++)  
                                <option value="{{ $i }}" {{ $i == $jam ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            <select id="dokumentasiEditMenit" class="form-select my-2 mx-1 w-auto" name="menit" aria-label="Default select example">
                                @for($i = 0; $i < 60; $i++)  
                                <option value="{{ $i }}" {{ $i == $menit ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            <select id="dokumentasiAddTanggal" class="form-select my-2 mx-1 w-auto" name="tanggal" aria-label="Default select example">
                                @for($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}" {{ $i == $tanggal ? 'selected' : '' }}>Tanggal {{ $i }}</option>
                                @endfor
                            </select>
                            
                            <select id="dokumentasiEditBulan" class="form-select my-2 mx-1 w-auto" name="bulan" aria-label="Default select example" onchange="updateTanggalAdminDokumentasiEdit()">
                                @foreach($bulanArray as $i => $value)
                                    <option value="{{ $i }}" {{ $i == $bulan ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            
                            <select id="dokumentasiEditTahun" class="form-select my-2 mx-1 w-auto" name="tahun" aria-label="Default select example" onchange="updateTanggalAdminDokumentasiEdit()">
                                @for($i = 1970; $i <= 2050; $i++)
                                <option value="{{ $i }}" {{ $i == $tahun ? 'selected' : '' }}>Tahun {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row pt-5 pb-2">
                            <div class="col-xl-4 col-md-6 px-2">
                                <a href="/dokumentasi/{{ $Dokumentasi->nama_dokumentasi }}" class="btn btn-sm w-100 mb-2 py-2 btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                    Lihat
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-6 px-2">
                                <button type="submit" name="hapus" class="btn btn-sm w-100 mb-2 py-2 text-white btn-danger" onclick="confirmDelete()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                    Hapus
                                </button>
                            </div>
                            <div class="col-xl-4 col-md-6 px-2">
                                <button type="submit" name="save" class="btn btn-sm w-100 mb-2 py-2 text-white btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                        <path d="M11 2H9v3h2z"/>
                                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                    </svg>
                                    Simpan
                                </button>
                            </div>
                        </div>
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