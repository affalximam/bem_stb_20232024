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
                <h1 class="text-center pt-2 pb-5">TAMBAH ANGGOTA</h1>
            </div>
            <form action="{{ route('admin.anggota.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <h2>Nama Anggota</h2>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input-lg" name="nama_anggota" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Nama Anggota</label>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h2>Upload Gambar</h2>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="gambar_anggota" accept="image/*">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h2>Departemen</h2>
                        <select class="form-select form-select-lg" aria-label="Default select example" name="posisi_anggota" required>
                            @foreach($Departemen as $departemenList)
                                <option value="{{ $departemenList['nama_departemen'] }}">{{ $departemenList['nama_departemen'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <h2>Jabatan</h2>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input-lg" id="floatingInput" placeholder="Jabatan" name="jabatan_anggota" required>
                            <label for="floatingInput">Jabatan</label>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h2>Jurusan</h2>
                        <select class="form-select form-select-lg" aria-label="Default select example" name="jurusan_anggota" required>
                            <option value="INFORMATIKA">INFORMATIKA</option>
                            <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <h2>Angkatan</h2>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control input-lg" id="floatingInput" placeholder="Angkatan" name="angkatan_anggota" required>
                            <label for="floatingInput">Angkatan</label>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="col-xl-3 sm-6">
                            <button type="submit" class="btn btn-sm w-100 me-1 text-white btn-success py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                    <path d="M11 2H9v3h2z"/>
                                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                </svg>
                                Simpan
                            </button>
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